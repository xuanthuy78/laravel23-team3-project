<?php

namespace App\Providers;
use App\Slide;
use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Cart;
use Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Schema::defaultStringLength(191);

        if (Schema::hasTable('slides')) {
            $slides = Slide::all();
            View::share('slides', $slides);
        }
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share('categories', $categories);   
        }
        // if(Session('cart')) { 
        //     $oldCart = Session::get('cart');
        //     $cart = new Cart($oldCart);
        //     View::share(['cart' => Session::get('cart'),'product_cart2' => $cart->items,'totalPrice' => $cart->totalPrice,'totalQty' => $cart->totalQty]);
        // }
        view()->composer(['header','page.shopping-cart'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
