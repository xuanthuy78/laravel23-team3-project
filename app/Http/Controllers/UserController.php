<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
     public function user_show()
    {
        return view('page.users.user');
    }
    public function previewCart()
    {
        return view('page.users.previewcart');
    }
}
