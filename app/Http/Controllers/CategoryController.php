<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProducts($id)
    {
        $category=Category::findOrFail($id);
        $products=$category->products;
        return view('page.product',compact('category','products'));
    }
    public function searchCategories()
    {
        $data=Input::all();
        $category_id=$data['nameCategory'];
        $product_key=$data['search_key'];
        if($product_key<>"")
        {
        $products=Product::where('category_id',$category_id)->where('name','like','%'.$product_key.'%')->get();
        }
        else
        {
        $products=Product::where('category_id',$category_id)->get();  
        }
        $category=Category::findOrFail($category_id);
        return view('page.categories.search_category',compact('products','category'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
