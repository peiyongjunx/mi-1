<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/demo1', function () {
    return view('home.detail');
});

Route::get('/login', function () {
    return view('home.login');
});

Route::get('/register', function () {
    return view('home.register');
});

Route::get('/user', function () {
		 return view('home.user.userCenter');
});

Route::get('/myOrder', function () {
		 return view('home.user.myOrder');
});

Route::get('/showOrder', function () {
		 return view('home.user.showOrder');
});

Route::get('/message', function () {
		 return view('home.user.message');
});

Route::get('/like', function () {
		 return view('home.user.like');
});

Route::get('/address', function () {
		 return view('home.user.address');
});

Route::get('/server', function () {
		 return view('home.user.server');
});

// Route::get('/service', function () {
// 		 return view('home.user.service');
// });

Route::get('/admin_login', function () {
    return view('admin.index');
});

Route::get('/user_list', function () {
    return view('admin.user_list');
});

Route::get('/goods_list_all', function () {
    return view('admin.goods_list_all');
});

Route::get('/goods_list_off', function () {
    return view('admin.goods_list_off');
});

Route::get('/goods_list_on', function () {
    return view('admin.goods_list_on');
});

Route::get('/order_list_cancel', function () {
    return view('admin.order_list_cancel');
});

Route::get('/order_list_all', function () {
    return view('admin.order_list_all');
});

Route::get('/order_list_off', function () {
    return view('admin.order_list_off');
});

Route::get('/code',"code\CodeController@captcha");
