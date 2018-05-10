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

    Auth::routes();

    Route::get('', function (){
        return redirect('admin/login');
    });

    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin_dashboard');

    // Routes use for user management
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'Admin\AdminController@showUser')->name('list_user');
        Route::get('/delete/{id}', 'Admin\AdminController@deleteUser')->name('delete_user');
//        Route::get('/?page={index}')
    });

    // Routes use for bill management
    Route::group(['prefix' => 'bill'], function() {
        Route::get('/', 'Admin\AdminController@showBill')->name('list_bill');
//        Route::delete('/{id}', 'AdminController@deleteUser')->name('delete_bill');
        Route::get('/ajax/{status}', 'AjaxController@getBillRecord');
    });

    // Routes use for category management
    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'Admin\AdminController@showCategory')->name('list_category');
    });
    // Routes use for search customer
    Route::group(['prefix' => 'search_customer'], function() {
        Route::get('/', 'Admin\AdminController@listCustomers')->name('list_customer');
        Route::get('/search', 'Admin\AdminController@searchCustomer')->name('search_customer');
        Route::get('/delete/{id}', 'Admin\AdminController@deleteUser')->name('delete_user');
    });

    Route::get('/logout', 'Admin\AdminController@logout' )->name('admin_logout');





//Route::get('previewcart',
//	['as'=>'don-dat-hang',
//	'uses'=>'UserController@previewCart'
//]);
//Route::get('index',
//	['as'=>'trang-chu',
//	'uses'=>'HomeController@index'
//]);
//Route::get('menu-content',
//	['as'=>'menu-content',
//	'uses'=>'HomeController@menuContent'
//]);
//Route::get('search_categories',
//	['as'=>'tim-kiem-the-loai',
//	'uses'=>'CategoryController@searchCategories'
//]);
//Route::get('search_products',
//	['as'=>'tim-kiem-san-pham',
//	'uses'=>'ProductController@searchProducts'
//]);
//Route::get('products',
//	['as'=>'san-pham',
//	'uses'=>'ProductController@getProduct'
//]);
//Route::get('categories/{id}',
//	['as'=>'san-pham-the-loai',
//	'uses'=>'CategoryController@showProducts'
//]);
//Route::get('categories/product/{id}',
//	['as'=>'chi-tiet-san-pham',
//	'uses'=>'ProductController@getProduct_Detail'
//]);
//
//Route::get('contact',
//	['as'=>'lien-he',
//	'uses'=>'PageController@contact'
//]);
//
//
///** User Profile**/
//
//Route::patch('users/update/{id}',
//	['as'=>'sua-profile',
//	'uses'=>'UserController@user_update'
//]);
//Route::post('users/login',
//	['as'=>'dang-nhap',
//	'uses'=>'UserController@login'
//]);
//Route::get('users/logout',
//	['as'=>'dang-xuat',
//	'uses'=>'UserController@logout'
//]);
//Route::get('users/{id}',
//	['as'=>'profile',
//	'uses'=>'UserController@user_show'
//]);
//Route::post('users/signup',
//	['as' => 'dang-ky',
//	'uses' => 'UserController@signup'
//]);
///** ------------**/
//Route::get('additemcart/{id}',
//	['as' => 'add-item-cart',
//	'uses' => 'PageController@addItemCart'
//]);
//Route::get('cart',
//	['as' => 'shopping-cart',
//	'uses' => 'PageController@listCart'
//]);
//Route::get('deleteitemcart/{id}',
//	['as' => 'delete-item-cart',
//	'uses' => 'PageController@deleteItemCart'
//]);
//Route::get('cart/update/{id}',
//	['as' => 'update-item-cart',
//	'uses' => 'PageController@updateItemCart'
//]);
//Route::get('checkout',
//	['as'=>'dat-hang',
//	'uses'=>'BillController@checkout'
//]);
//Route::post('checkout',
//	['as' => 'xn-dathang',
//	'uses' => 'BillController@confirmCheckout'
//]);
//Route::get('additemcartqty/{id}',
//	['as' => 'add-item-cart-qty',
//	'uses' => 'PageController@addItemCartQty'
//]);
//
//Route::get('/home', 'HomeController@index')->name('home');
