<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    //
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
