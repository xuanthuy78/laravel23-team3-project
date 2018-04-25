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
Route::get('users',
	['as'=>'nguoi-dung',
	'uses'=>'UserController@user_show'
]);
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
Route::get('products',
	['as'=>'san-pham',
	'uses'=>'ProductController@getProduct'
]);
Route::get('categories/products/{id}',
	['as'=>'san-pham-the-loai',
	'uses'=>'CategoryController@showProducts'
]);
Route::get('product_details',
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
