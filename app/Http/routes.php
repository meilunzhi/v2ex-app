<?php

/*
|--------------------------------------------------------------------------
| laravel 5 默认路由
|--------------------------------------------------------------------------
*/

Route::get('/','PagesController@index');

Route::get('about','PagesController@about');

Route::get('contact','PagesController@contact');

Route::get('login', 'LoginController@login');

//后台用户管理登录
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//admin login default
Route::get('/admin', ['middleware' => 'auth', function () {
    return view('home');
}]);


//Route::get('/', function(App\Stats $stats)
//{
//	return view('home',compact('stats'));
//});
//Route::get('/other',function(App\Stats $stats)
//{
//	return view('other',compact('stats'));
//});
//Route::get('/login',function()
//{
//	return view('login');
//});

