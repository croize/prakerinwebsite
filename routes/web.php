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

Route::resource('/event', 'UserEventController');
Route::resource('/', 'MagangController');
Route::resource('/as', 'MagangController');
Route::resource('/score', 'ScoreController');


Auth::routes();
Route::group(['middleware' => 'revalidate'],function(){
Route::get('/home', 'HomeController@index');
Route::resource('/aevent', 'AdminEventController');
Route::resource('/question' , 'QuestionController');
Route::resource('/qoption' , 'QuestionOptionController');
});
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::get('error', function(){
  return view('admin.404');
});
