<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.bill');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = Bill::findOrFail($id);
        return $bill;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $bill = Bill::findOrFail($id);
        $bill->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Bill Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiBill() {
        $bill = Bill::all();
        return DataTables::of($bill)
            ->addColumn('action', function($bill){
                return '<a onclick="editForm('. $bill->id .')" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>'.
                    '<a onclick="deleteData('. $bill->id .')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</a>';
            })->make(true);
    }
}
