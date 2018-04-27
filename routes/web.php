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

Route::get('/', function () {
    return view('welcome');
});

Route::get('previewcart',
	['as'=>'don-dat-hang',
	'uses'=>'UserController@previewCart'
]);
Route::get('index',
	['as'=>'trang-chu',
	'uses'=>'HomeController@index'
]);
Route::get('menu-content',
	['as'=>'menu-content',
	'uses'=>'HomeController@menuContent'
]);
Route::get('search_categories',
	['as'=>'tim-kiem-the-loai',
	'uses'=>'CategoryController@searchCategories'
]);
Route::get('search_products',
	['as'=>'tim-kiem-san-pham',
	'uses'=>'ProductController@searchProducts'
]);
Route::get('products',
	['as'=>'san-pham',
	'uses'=>'ProductController@getProduct'
]);
Route::get('categories/{id}',
	['as'=>'san-pham-the-loai',
	'uses'=>'CategoryController@showProducts'
]);
Route::get('categories/product/{id}',
	['as'=>'chi-tiet-san-pham',
	'uses'=>'ProductController@getProduct_Detail'
]);

Route::get('contact',
	['as'=>'lien-he',
	'uses'=>'PageController@contact'
]);
Route::get('cart',
	['as'=>'shopping-cart',
	'uses'=>'BillController@listcart'
]);
Route::get('checkout',
	['as'=>'dat-hang',
	'uses'=>'BillController@checkout'
]);
/** User Profile**/

Route::patch('users/update/{id}',
	['as'=>'sua-profile',
	'uses'=>'UserController@user_update'
]);
Route::post('users/login',
	['as'=>'dang-nhap',
	'uses'=>'UserController@login'
]);
Route::get('users/logout',
	['as'=>'dang-xuat',
	'uses'=>'UserController@logout'
]);
Route::get('users/{id}',
	['as'=>'profile',
	'uses'=>'UserController@user_show'
]);
Route::post('users/signup',
	['as' => 'dang-ky',
	'uses' => 'UserController@signup'
]);
/** ------------**/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
