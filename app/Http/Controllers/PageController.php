<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function contact()
    {
    	return view('page.contact');
    }

    public function getAddtoCart(Request $request, $id)
    {
    	$product = Product::findOrFail($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$id);
    	$request->session()->put('cart',$cart);
        //dd($cart);
    	return redirect()->back();
    }
    public function getDeletetoCart(Request $request, $id)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $product = Product::findOrFail($id);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else {
            Session::forget('cart');
        }
        
        return redirect()->back();
    }
}
