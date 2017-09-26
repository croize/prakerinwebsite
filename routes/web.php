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



Route::resource('/score', 'ScoreController');
Route::resource('/count', 'CountController');
Auth::routes();
Route::group(['middleware' => 'revalidate'],function(){
Route::get('/home', 'HomeController@index');
//admin
Route::resource('/aevent', 'AdminEventController');
Route::resource('/question' , 'QuestionController');
Route::resource('/qoption' , 'QuestionOptionController');
//End Admin

//User
Route::resource('/event', 'UserEventController');
Route::resource('/', 'MagangController');
Route::resource('/as', 'MagangController');
Route::resource('/user/profile', 'UserProfileController');
//End User
});
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::get('error', function(){
  return view('admin.404');
});
