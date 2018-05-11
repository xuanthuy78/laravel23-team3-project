<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function contact()
    {
    	return view('page.contact');
    }
//rồi để t viêtd
    public function addItemCart($id)
    {
        $product = Product::findOrFail($id);
        if($product->promotion_price == 0) {
            Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->unit_price, 'options' =>array('img' => $product->image)));
        }
        else {
            Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->promotion_price, 'options' =>array('img' => $product->image)));
        }
        return redirect()->back();    
    }

    public function listCart()
    {
        if(Cart::count() > 0) {
            $content = Cart::Content();
            $total = Cart::subtotal();
            return view('page.shopping-cart', compact('content', 'total'));
        }
            return redirect('index')->with('flash_message', 'Chưa có giỏ hàng');  
    }
        
    public function deleteItemCart($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function updateItemCart(Request $request,$id)
    {
        $newqty = $request->newQty;
        $proId = $request->proID;
        $rowId = $request->rowID;
        //echo $rowID;
        Cart::update($rowId, $newqty);
        $content = Cart::Content();
        //echo "Ok";
        return view('page.update-shopping-cart', compact('content'));      
    }
    public function addItemCartQty(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $qty = $request->val;
        if($product->promotion_price == 0) {
            Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => $qty, 'price' => $product->unit_price, 'options' =>array('img' => $product->image)));
        }
        else {
            Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => $qty, 'price' => $product->promotion_price, 'options' =>array('img' => $product->image)));
        }
        $content = Cart::Content();
        return redirect()->back(); 
    }

}
