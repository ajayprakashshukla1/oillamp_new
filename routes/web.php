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

// front end route
$this->get('/', 'HomeController@index');
$this->get('/star-detail', 'HomeController@star_detail');
$this->get('/buy-sticker', 'HomeController@buy_sticker');

// auth route
$this->get('/login', 'AuthController@login');
Route::post('/login','AuthController@login');

$this->get('/registration', 'AuthController@registration');
Route::post('/registration','AuthController@registration');




// admin route
$this->get('/admin/dashboard', 'AdminController@dashboard');
Route::post('/admin/dashboard','AdminController@dashboard');

$this->get('/admin/add_sticker', 'AdminController@add_sticker');
Route::post('/admin/add_sticker','AdminController@add_sticker');

$this->get('/admin/list_sticker', 'AdminController@list_sticker');

$this->get('/admin/delete_sticker/{id}', 'AdminController@delete_sticker');

//====== admin route end =========

Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});
/*Route::get('/', function () {
    return view('home');
});*/
