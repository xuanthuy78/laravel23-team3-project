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
	['as' => 'page-index',
	'uses' => 'HomeController@index'
]);

Route::group(['prefix' => 'categories'],function() {

	Route::get('search',
	['as' => 'search-categories',
	'uses' => 'CategoryController@searchCategories'
	]);

	Route::get('products/autoget',
	['as' => 'auto-name-search',
	'uses' => 'CategoryController@autoGetSearch'
	]);

	Route::get('{id}',
	['as' => 'categories-products',
	'uses' => 'CategoryController@showProducts'
	]);

	Route::get('product/{id}',
	['as' => 'product-detail',
	'uses' => 'ProductController@getProductDetail'
	]);

});

Route::get('products/search',
	['as' => 'search-products',
	'uses' => 'ProductController@searchProducts'
]);

Route::get('contact',
	['as' => 'page-contact',
	'uses' => 'PageController@contact'
]);
Route::get('ajax/categories/{id}',
	['as' => 'ajax-categories-products',
	'uses' => 'CategoryController@ajaxPaginateProducts'
]);

/** User Profile**/
Route::group(['prefix' => 'user'],function(){

	Route::get('checkout',
	['as' => 'page-checkout',
	'uses' => 'BillController@checkout'
	]);
	
	Route::post('checkout',
	['as' => 'confirm-checkout',
	'uses' => 'BillController@confirmCheckout'
	]);

	Route::get('previewCart',
	['as' => 'page-preview-cart',
	'uses' => 'UserController@previewCart'
	]);

	Route::post('login',
	['as' => 'page-login',
	'uses' => 'UserController@login'
	]);

	Route::get('forgetpassword',
	['as' => 'page-forget-password',
	'uses' => 'UserController@forgetPassword'
	]);

	Route::get('logout',
	['as' => 'page-logout',
	'uses' => 'UserController@logout'
	]);

	Route::post('signup',
	['as' => 'page-signup',
	'uses' => 'UserController@signup'
	]);

	Route::get('{id}',
	['as' => 'profile',
	'uses' => 'UserController@userProfile'
	]);

	Route::patch('update/{id}',
	['as' => 'update-profile',
	'uses' => 'UserController@userUpdate'
	]);

	Route::get('changePassword/{id}',
	['as' => 'profile',
	'uses' => 'UserController@changePasswordShow'
	]);

	Route::patch('changePassword/update/{id}',
	['as' => 'update-password',
	'uses' => 'UserController@changePassword'
	]);

	Route::post('product/{id}/comment',
	['as' => 'comment',
	'uses' => 'UserController@comment'

	]);

	Route::get('deleteBill/{id}',
	['as' => 'delete-bill',
	'uses' => 'BillController@deleteBill'
]);

});

/** ------------**/
Route::group(['prefix' => 'cart'],function(){
	
	Route::post('add/{id}',
	['as' => 'add-item-cart',
	'uses' => 'PageController@addItemCart'
	]);

	Route::get('delete/{id}',
	['as' => 'delete-item-cart',
	'uses' => 'PageController@deleteItemCart'
	]);

	Route::post('update/{id}',
	['as' => 'update-item-cart',
	'uses' => 'PageController@updateItemCart'
	]);

	Route::post('add/{id}/qty',
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

Route::get('comment/delete/{id}',
	['as' => 'delete-comment',
	'uses' => 'UserController@deleteComment'
]);

Route::get('bills/{id}/export',
	['as' => 'export-bills',
	'uses' => 'UserController@exportBill'
]);



