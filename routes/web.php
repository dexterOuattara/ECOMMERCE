<?php
// Route::view('/', 'welcome');




Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm')->name('login.writer');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm')->name('register.writer');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter')->name('register.writer');


Route::view('/home', 'home')->middleware('auth');
Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/welcomedetail', 'WelcomeController@welcomedetail')->name('welcomedetail');
Route::get('/appartments', 'WelcomeController@appartments')->name('appartments');
Route::get('/immeubles', 'WelcomeController@immeubles')->name('immeubles');
Route::get('/terrains', 'WelcomeController@terrains')->name('terrains');
Route::get('/maisons', 'WelcomeController@maisons')->name('maisons');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});

Route::group(['middleware' => 'auth:writer'], function () {
    Route::view('/writer', 'writer');
});


Route::get('actions/publieruser', 'HomeController@publieruser')->name('actions/publieruser');
