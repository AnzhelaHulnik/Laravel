<?php


Route::get('/', function () {
    return view('welcome');      //главная страница по умолчанию
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Запрещаем доступ не зарегестрированных пользователей ['middleware'=>'auth']
Route::group(['middleware'=>'auth'], function (){
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::resource('/admin/shops', 'ShopController');
    Route::resource('/admin/posts', 'PostController');
    Route::resource('/admin/users', 'PostController');
    // разрешаем методы для публичной части
    Route::resource('/admin/posts', 'PostController')->except(['index', 'show']);
    Route::resource('/admin/shops', 'ShopController')->except(['index', 'show']);

});

// Роут с динамическим параметром
Route::get('/posts/{slug}', 'PostController@show')->name('post.show');
Route::get('/shops/{slug}', 'ShopController@show')->name('shop.show');
// Роут с выводом всех элементов сущности
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/shops', 'ShopController@index')->name('shop.index');
Route::get('/feedback', 'MailController@feedback')->name('feedback');
Route::get('/sendmail', 'MailController@sendmail')->name('sendmail');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/shops', 'ShopController@index');
Route::get('/feedback', 'MailController@feedback');
Route::resource('/admin/shops', 'ShopController');
Route::resource('/shop','ShopController');



/*/