<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Slide::all();
        $categories=Category::all();
        $newproducts=Product::where('new',1)->paginate(3);
        $promotionproducts=Product::where('promotion_price','<>',0)->paginate(6);
        //dd($newproduct);
        return view('page.index',compact('slides','categories','newproducts','promotionproducts'));
        
    }

}
