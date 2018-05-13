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
    return redirect('index');
});
Route::get('index',
	['as'=>'trang-chu',
	'uses'=>'HomeController@index'
]);
Route::get('search_categories',
	['as'=>'tim-kiem-the-loai',
	'uses'=>'CategoryController@searchCategories'
]);
Route::get('search_products',
	['as'=>'tim-kiem-san-pham',
	'uses'=>'ProductController@searchProducts'
]);
Route::get('categories/products/autoget',
	['as' => 'auto-name-search',
	'uses' => 'CategoryController@autoGetSearch'
]);
Route::get('categories/{id}',
	['as'=>'san-pham-the-loai',
	'uses'=>'CategoryController@showProducts'
]);
Route::get('categories/product/{id}',
	['as'=>'chi-tiet-san-pham',
	'uses'=>'ProductController@getProductDetail'
]);
Route::get('contact',
	['as'=>'lien-he',
	'uses'=>'PageController@contact'
]);

/** User Profile**/
Route::group(['prefix' => 'users'],function(){

	Route::get('checkout',
	['as'=>'dat-hang',
	'uses'=>'BillController@checkout'
	]);
	
	Route::post('checkout',
	['as' => 'xn-dathang',
	'uses' => 'BillController@confirmCheckout'
	]);

	Route::get('previewCart',
	['as'=>'don-dat-hang',
	'uses'=>'UserController@previewCart'
	]);

	Route::post('login',
	['as'=>'dang-nhap',
	'uses'=>'UserController@login'
	]);

	Route::get('forgetpassword',
	['as' => 'quen-mat-khau',
	'uses' => 'UserController@forgetPassword'
	]);

	Route::get('logout',
	['as'=>'dang-xuat',
	'uses'=>'UserController@logout'
	]);

	Route::post('signup',
	['as' => 'dang-ky',
	'uses' => 'UserController@signup'
	]);

	Route::get('{id}',
	['as'=>'profile',
	'uses'=>'UserController@userProfile'
	]);

	Route::patch('update/{id}',
	['as'=>'sua-profile',
	'uses'=>'UserController@userUpdate'
	]);

	Route::get('changePassword/{id}',
	['as'=>'profile',
	'uses'=>'UserController@changePasswordShow'
	]);

	Route::patch('changePassword/update/{id}',
	['as'=>'sua-profile',
	'uses'=>'UserController@changePassword'
	]);

});

/** ------------**/
Route::group(['prefix' => 'cart'],function(){
	
	Route::get('add/{id}',
	['as' => 'add-item-cart',
	'uses' => 'PageController@addItemCart'
	]);

	Route::get('delete/{id}',
	['as' => 'delete-item-cart',
	'uses' => 'PageController@deleteItemCart'
	]);

	Route::get('update/{id}',
	['as' => 'update-item-cart',
	'uses' => 'PageController@updateItemCart'
	]);

	Route::get('add/{id}/qty',
	['as' => 'add-item-cart-qty',
	'uses' => 'PageController@addItemCartQty'
	]);

	Route::get('',
	['as' => 'shopping-cart',
	'uses' => 'PageController@listCart'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
