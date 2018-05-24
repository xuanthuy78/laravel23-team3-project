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

//Routes use for admin_side
Route::group(['prefix' => 'admin'], function () {
//    Auth::routes();

    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

    // Routes use for user management
    Route::group(['prefix' => 'user'], function() {

        // Api get user
        Route::get('api/user', 'Admin\UserController@apiUser')->name('api.user');

        // Show list user
        Route::get('/', 'Admin\UserController@index')->name('admin.user.index');

        // Create user
        Route::post('/create', 'Admin\UserController@store')->name('admin.user.create');

        // Update user
        Route::get('/update/{id}', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::patch('/update/{id}', 'Admin\UserController@update')->name('admin.user.update');

        // Delete user
        Route::delete('/delete/{id}', 'Admin\UserController@destroy')->name('admin.user.destroy');
    });

    // Routes use for product management
    Route::group(['prefix' => 'product'], function() {
        // Api get product
        Route::get('api/product', 'Admin\ProductController@apiProduct')->name('api.product');

        // Show list product
        Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');

        // Create product
        Route::post('/create', 'Admin\ProductController@store')->name('admin.product.create');

        // Update product
        Route::get('/update/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
        Route::patch('/update/{id}', 'Admin\ProductController@update')->name('admin.product.update');

        // Delete user
        Route::delete('/delete/{id}', 'Admin\ProductController@destroy')->name('admin.product.destroy');

    });

    // Routes use for bill management
    Route::group(['prefix' => 'bill'], function() {
        // Api get bill
        Route::get('api/bill', 'Admin\BillController@apiBill')->name('api.bill');

        // Show list bill
        Route::get('/', 'Admin\BillController@index')->name('admin.bill.index');

        // Create bill
        Route::post('/create', 'Admin\BillController@store')->name('admin.bill.create');

        // Update bill
        Route::get('/update/{id}', 'Admin\BillController@edit')->name('admin.bill.edit');
        Route::patch('/update/{id}', 'Admin\BillController@update')->name('admin.bill.update');

        // Delete bill
        Route::delete('/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.bill.destroy');
    });

    // Routes use for category management
    Route::group(['prefix' => 'category'], function() {
        // Api get category
        Route::get('api/category', 'Admin\CategoryController@apiCategory')->name('api.category');

        // Show list product
        Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');

        // Create product
        Route::post('/create', 'Admin\CategoryController@store')->name('admin.category.create');

        // Update product
        Route::get('/update/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
        Route::patch('/update/{id}', 'Admin\CategoryController@update')->name('admin.category.update');

        // Delete user
        Route::delete('/delete/{id}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');
    });


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
Route::get('additemcart/{id}',
	['as' => 'add-item-cart',
	'uses' => 'PageController@addItemCart'
]);
Route::get('cart',
	['as' => 'shopping-cart',
	'uses' => 'PageController@listCart'
]);
Route::get('deleteitemcart/{id}',
	['as' => 'delete-item-cart',
	'uses' => 'PageController@deleteItemCart'
]);
Route::get('cart/update/{id}',
	['as' => 'update-item-cart',
	'uses' => 'PageController@updateItemCart'
]);
Route::get('checkout',
	['as'=>'dat-hang',
	'uses'=>'BillController@checkout'
]);
Route::post('checkout',
	['as' => 'xn-dathang',
	'uses' => 'BillController@confirmCheckout'
]);
Route::get('additemcartqty/{id}',
	['as' => 'add-item-cart-qty',
	'uses' => 'PageController@addItemCartQty'
]);

Route::get('/home', 'HomeController@index')->name('home');
