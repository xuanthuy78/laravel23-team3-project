<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;

class AdminController extends Controller
{
    public function index() {
        $admin = Auth::user()->name;
        return view('admin.master', [ 'admin' => $admin]);
    }

    // User Management
    public function showUser() {
        $users = DB::table('users')->paginate(10);
        $admin = Auth::user()->name;
        return view('admin.user', ['users' => $users, 'admin' => $admin]);
    }

    //Bill Management
    public function showBill() {
        $bills = DB::table('bills')->paginate(10);
        $admin = Auth::user()->name;
        return view('admin.bill', ['bills' => $bills, 'admin' => $admin]);
    }

    public function showCategory() {
        $categories = DB::table('categories')->paginate(10);
        $admin = Auth::user()->name;
        return view('admin.category', ['categories' => $categories, 'admin' => $admin]);
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/user');
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin');
    }

    public function listCustomers(){
        $users = DB::table('users')->paginate(10);
        $admin = Auth::user()->name;
        return view('admin.customer', ['users' => $users, 'admin' => $admin]);
    }

    public function searchCustomer()
    {
        $data = Input::all();
        // $customerID = $data['userID'];
        // $customerEmail = $data['email'];
        // $customerAddress = $data['address'];
        // $customerPhone = $data['phone'];
        $customerCreated = $data['date_up'];
        $customerUpdated = $data['date_crea'];
        $customers = User::Where('created_at','like',"%".$customerCreated."%")  
        ->orWhere('updated_at','like',"%".$customerUpdated."%")->get();
        $admin = Auth::user()->name;
        return view('admin.search_customer',compact('customers','admin'));
    }
}



