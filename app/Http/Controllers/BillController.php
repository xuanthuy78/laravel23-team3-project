<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;
use Auth;
use App\BillDetail;
use Cart;
use App\Http\Requests\CreateCheckoutRequest;
use DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listcart()
    {
        return view('page.shopping-cart');
    }
    
    public function checkout()
    {
        if(Auth::user()) {
            $content = Cart::Content();
            return view('page.checkout', compact('content'));
        }
            return redirect('index')->with('flash_message', 'Vui lòng đăng nhập trước khi đặt hàng');
    }

    public function confirmCheckout(CreateCheckoutRequest $request)
            
    {
        $cart=Cart::Content();
        $bill = new Bill;
        $bill->user_id = Auth::id();
        $bill->name = $request->name;
        $bill->phone = $request->phone;
        $bill->address = $request->address;
        $bill->date_order = date('Y-m-d H:i:s');
        $bill->total = Cart::subtotal(0,'.','');
        $bill->payment = $request->payment_method;
        $bill->note = $request->note;
        $bill->status = 0;
        $bill->save();

        foreach($cart as $item)
        {
            $billDetail = new BillDetail;
            $billDetail->bill_id = $bill->id;
            $billDetail->product_id = $item->id;
            $billDetail->quantity = $item->qty;
            $billDetail->unit_price = $item->price;
            $billDetail->save();
        }
        Cart::destroy();
        return redirect('index')->with('flash_message', 'Đặt hàng thành công!');
       
    }

    public function deleteBill($id){
        $bill = Bill::findOrFail($id);
        $bill_detail = BillDetail::where('bill_id','=',$id)->delete();
        $bill->delete();
        return redirect('previewcart');
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
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(bill $bill)
    {
        //
    }
}
