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

Route::get('/dashboard', function () {
    //return view('welcome');
    return view('dashboard');
});


Route::get('/', function () {
    //return view('welcome');
    return view('frontend/estore');
});

Route::get('product_deatils','ProductdeatilsController@productdetails');


//product list page
Route::get('/product_list', function () {
    return view('frontend/product_list');
});

//checkout page
Route::get('/checkout', function () {
    return view('frontend/checkout');
});

//my account page 
Route::get('/my_account', function () {

    return view('frontend/my_account');   
});

//wishlist page
Route::get('/wishlist', function () {
    return view('frontend/wishlist');
});

//Estore Register page
Route::get('/estore_register', function () {
    return view('frontend/estore_register');
});

//Estore Login Page
Route::get('/estore_login', function () {
    return view('frontend/estore_login');
});

//Estore Contact US Page
// Route::get('/contact', function () {
//     return view('frontend/contact');
// });
Route::view('/contact', 'frontend/contact');

//Admin LTE SignIn Page
Route::get('/signin', function () {
    return view('signin');
});

//Admin LTE signUp Page
Route::get('/signup', function () {
    return view('signup');
});

// Category page controller for admin   
Route::get('admin/category','CategoryController@categorypageview');
Route::post('/addcategory','CategoryController@addcategory');

//ArrayTest
Route::get('test','CategoryController@ArrayTest');


// Product page controller for User
Route::get('admin/product','ProductController@productpageview');
Route::post('/addproduct','ProductController@addproduct');



Route::get('view-records','UserViewController@index');


Route::get('admin/create','StudInsertController@insert');
Route::post('/create','StudInsertController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/delete/{id}','StudInsertController@destroy');
Route::get('/cart','ProductController@productview');

Route::get('/product_list','ProductController@allproductview');

//image upload routes
Route::get('image-upload', 'ImageUploadController@imageUpload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('/greeting', function () {
    return 'Hello World';
});

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('user_dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
});
// sociallite controller route
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');

//multiple image upload test FileController create  store
  
Route::get('file', 'FileController@create'); 
Route::post('file','FileController@store');