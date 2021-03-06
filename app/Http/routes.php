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
//首页路由
Route::get('/', function () {
    return view('welcome');
});

//微信验证
Route::any('wechat/{uid}.html','WxController@server');

//注册路由
Route::get('auth/reg','Auth\AuthController@getRegister');
Route::post('auth/reg','Auth\AuthController@postRegister');
//登录路由
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
//登出路由
Route::get('auth/logout','Auth\AuthController@getLogout');
//登陆成功欢迎页面
Route::get('home','Custromer\CusController@index');


//欢迎界面路由
Route::get('/cus/start','Custromer\CusController@start');
//配置公众账号路由
Route::get('/cus/enable','Custromer\CusController@enable');
//提交信息路由
Route::post('/cus/enable','Custromer\CusController@postenable');
//进入后台路由(配置完成的欢迎界面)
Route::get('welcome','Custromer\CusController@welcome');


//测试路由
Route::get('test','TestController@index');

//测试删除菜单
Route:get('del/{uid?}','WxController@delmenu');