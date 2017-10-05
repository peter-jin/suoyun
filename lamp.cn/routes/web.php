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

	//网站引导页面路由
	Route::get('/','HomeController@index');



 Route::group(['prefix' => 'home','middleware' => 'web'], function(){
	
	//前台会员登录
	Route::any('/login','HomeController@login');
	Route::any('/hylogin','HomeController@postlogin');


	//网站产品中心路由
	Route::get('/product','HomeController@product');
	//前台新闻中心
	Route::get('/news','HomeController@news');
	//前台解决方案
	Route::get('/solution','HomeController@solution');
	//前台培训中心
	Route::get('/train','HomeController@train');
	//前台服务与支持
	Route::get('/service','HomeController@service');
	//前台关于我们
	Route::get('/about','HomeController@about');

 });

 	

Route::group(['prefix' => 'admin','middleware' => 'web'], function(){
	//后台设置路由
	Route::get('/settings','AdminController@settings');
	//后台登录路由
	Route::get('/login','AdminController@login');
	Route::post('/gllogin','AdminController@postlogin');

	//后台总控制台路由
	Route::any('/dashboard','AdminController@dashboard');
	//后台用户管理路由
	Route::get('/user_show','UserController@user_show');
	Route::get('/userb','UserController@userb');
	//后台添加用户路由
	Route::get('/user_edit_show','UserController@user_edit_show');
	//用户编辑
	Route::get('/user_edit_add/{user_id}','UserController@user_edit_add');


	//用户删除
	Route::get('/user_delete/{user_id}','UserController@user_delete');



	//后台添加用户
	Route::get('/user_insert','UserController@user_insert');
	//添加操作
	Route::post('/insert','UserController@postinsert');


	//后台表格
	Route::get('/tables','AdminController@tables');

	// Route::get('/login','AdminController@index');




});

	
// Route::get('/a',function(){
// 		session(['key'=>1234]);
// 		return view('welcome');
// 	});

// Route::get('/b',function(){
// 		echo session('key');
// 		return 'key';
// 	});


// Route::get('/product','HomeController@product');
// Route::get('/product','HomeController@product');
// Route::get('/product','HomeController@product');
// Route::get('/product','HomeController@product');
Route::get('/test','HomeController@test');


