<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Input;
use app\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'] , function(){
	Route::get('update_profile',function(){
		$user = Auth::user();
		return view('update/profile',compact('user'));
	})->name('update_profile');

	Route::put('update_profile/{id}', function($id){
      $user = User::findOrFail($id);
      $data = Input::all();
      $user->update($data);
      return redirect('/');
    });

  Route::get('submit_pass',function(){
    $user = Auth::user();
    return view('update/submit_pass',compact('user'));
  });

  Route::post('change_password','UserController@submitPassword')->name;
});
