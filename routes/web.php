<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'WelcomeController@index');

Route::get('/category/{id}', 'WelcomeController@category');
Route::get('/product/{id}', 'WelcomeController@product');
Route::get('/cart', 'WelcomeController@cart');
Route::get('/checkout', 'WelcomeController@checkout');
Route::get('/login', 'WelcomeController@login');
Route::get('/compare', 'WelcomeController@compare');
Route::get('/wishlist', 'WelcomeController@wishlist');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/blog-details', 'WelcomeController@blog_details');

/*
 * Start Cart
 */
Route::match(['get','post'],'/add-to-cart/{id}', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/delete-to-cart/{id}', 'CartController@delete_to_cart');

Route::get('/ajax-email-check/{id}', 'WelcomeController@ajax_email_check');

/*
|--------------------------------------------------------------------------
| SUPER ADMIN 
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/admin-panel','AdminController@index');
Route::post('/admin-login-check','AdminController@admin_login_check');
Route::get('logout', 'SuperAdminController@logout');
Route::get('/dashboard', 'SuperAdminController@index');

Route::get('/manage-category','SuperAdminController@category');

Route::get('/add-category','SuperAdminController@add_category');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/unpublished-category/{id}','SuperAdminController@unpublished_category');
Route::get('/published-category/{id}','SuperAdminController@published_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category');
Route::post('/update-category','SuperAdminController@update_category');
Route::get('/up-category/{id}','SuperAdminController@up_category');
Route::get('/arcive-category','SuperAdminController@arcive_category');


Route::get('/manage-manufacture','SuperAdminController@manage_manufacture');
Route::get('/add-manufacture','SuperAdminController@add_manufacture');
Route::post('/save-manufacture','SuperAdminController@save_manufacture');
Route::get('/published-manufacture/{id}','SuperAdminController@published_manufacture');
Route::get('/unpublished-manufacture/{id}','SuperAdminController@unpublished_manufacture');
Route::get('/edit-manufacture/{id}','SuperAdminController@edit_manufacture');
Route::post('/update-manufacture','SuperAdminController@update_manufacture');
Route::get('/delete-manufacture/{id}','SuperAdminController@delete_manufacture');


Route::get('/manage-product','SuperAdminController@manage_product');
Route::get('/add-product','SuperAdminController@add_product');
Route::post('/save-product','SuperAdminController@save_product');
Route::get('/delete-product/{id}','SuperAdminController@delete_product');
Route::get('/unpublished-product/{id}','SuperAdminController@unpublished_product');
Route::get('/published-product/{id}','SuperAdminController@published_product');
Route::get('/edit-product/{id}','SuperAdminController@edit_product');

