<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Http\Requests\CreateUserSignUpRequest;
use App\Bill;
use App\BillDetail;

class UserController extends Controller
{
    
     function __construct()
    {
        if(Auth::check())
            {
                view()->share('nguoidung',Auth::user());
            }
    }

    public function user_show()
   
    {
        return view('page.users.user');
    }

    public function changePassword_show()
    {
        return view('page.users.password');
    }

    public function previewCart()
    {
        if (Auth::user()) {
            $id = Auth::user()->id;
            $bills = Bill::get()->where('user_id','=',$id);
            $billdetails = BillDetail::get();
            return view('page.users.previewcart',compact('bills','billdetails'));
        }
        return redirect('index');
    }

    public function login(Request $request)
    {
    	$this->validate($request,[
                'Email' => 'required',
                'Password' => 'required|min:3|max:32'
        ],[
                'Email.required' => 'Bạn chưa nhập Email',
                'Password.required' => 'Bạn chưa nhập Password',
                'Password.min' => 'Password không nhỏ hơn 3 ký tự',
                'Password.max' => 'Password không được quá 32 ký tự'

        ]);
        $Email = $request->Email;
        $Password = ($request->Password);
        if(Auth::attempt(['email'=> $Email, 'password' => $Password]))
            {
                  return redirect('index');
            }
            return redirect('index')->with('flash_message','Tài khoản không đúng');
    }

    public function logout()
    {
    	Auth::logout();
  		return redirect('index');
    }

    public function user_update(Request $request,$id)
    {
    	$this->validate($request,[
        'name' => 'required|min:3',
        'address' => 'required|min:10',
        'phone' => 'required|min:10|max:12'
        ],[
        'name.required' => 'Bạn chưa nhập tên người dùng',
        'name.min' => 'Tên người dùng phải có ít nhât 3 ký tự',
        'address.required' => 'Bạn chưa nhập địa chỉ',
        'address.min' => 'Địa chỉ phải trên 10 ký tự',
        'phone.required' => 'Bạn chưa nhập điện thoại',
        'phone.min' => 'Địa thoại phải từ 10 số',
        'phone.max' => 'Địa thoại tối đa 12 số'
        ]);
        $user = User::find($id);
        // $email=$user->email;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        //$user->email=$email;
        if($request->changePassword == "on")
        {
         $this->validate($request,[
        'password' => 'required|min:3|max:15',
        'cpassword' => 'required|same:password'
        ],[
        'password.required' => 'Bạn chưa nhập mật khẩu',
        'password.min' => 'Mật khẩu phải có ít nhât 5 ký tự',
        'password.max' => 'Mật khẩu chỉ được tối đã 15 ký tự',
        'cpassword.required' => 'Bạn chưa nhập lại mật khẩu',
        'cpassword.same' => 'Mật khẩu nhập lại chưa khớp'
        ]);
            $user->password = Hash::make($request->password); 
        }
        $user->save();
        //dd($user);
        return redirect('users/'.$id)->with('flash_message','Sửa thành công');
    }

    public function changePassword(Request $request,$id)
    {
        $user=User::find($id);
        $this->validate($request,
            [
                'password' => 'required|min:3|max:15',
                'cpassword' => 'required|same:password'
            ],
            [
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhât 5 ký tự',
                'password.max' => 'Mật khẩu chỉ được tối đã 15 ký tự',
                'cpassword.required' => 'Bạn chưa nhập lại mật khẩu',
                'cpassword.same' => 'Mật khẩu nhập lại chưa khớp'
            ]
        );
        $user->password = Hash::make($request->password); 
        $user->save();
        return redirect('changePassword/'.$id)->with('flash_message','Sửa thành công');
    }

    public function signup(CreateUserSignUpRequest $request)
    {
        $data = $request->all();
        $data['address'] = "";
        $data['phone'] = "";
        $data['gender'] = 1;
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return redirect('index')->with('flash_message','Đã đăng ký thành công, xin mời đăng nhập !');

    }
    public function forgetPassword()
    {
        return view('auth.passwords.email');
    }
}
