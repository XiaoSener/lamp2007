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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',function(){
	echo 'login page';
});
// Route::group(['middleware'=>'login'],function(){
	
	Route::get('/admin',function(){
		echo 'admin';
	});


	Route::get('/user/{id}',function($id){
		echo '用户id为'.$id;
	})->where('id','\d+');

	// Route::get('/name/{name}-{id}',function($name,$id){
	// 	echo $request->route('name');
	// 	echo $request->route('id');
	// });
	Route::get('/pass',function(){
		echo 'pass';
	})->name('ooo');

	Route::get('/word',function(){
		return '<a href="'.route('ooo').'">密码</a>';
	});
	Route::get('/404',function(){
		abort(404,'not found!!!');
	});
// });	
//后台路由
Route::get('/user/add','UserController@add');
Route::post('/user/insert','UserController@insert');

Route::get('/yin/{id}','UserController@show')->name('user.show');

Route::get('/test',function(){
	echo route('user.show',['id'=>2]);
});

Route::get('/users','UserController@index')->middleware('login');

//资源控制器  配置
Route::resource('tiezi','TieziController');

Route::get('/request','TieziController@request');

Route::get('/form','TieziController@form');

Route::post('/upload','TieziController@upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cookie','HomeController@set');

Route::get('/flash','HomeController@flash');

Route::get('/get-flash','HomeController@getFlash');

Route::get('/user-2','HomeController@user');

Route::post('/user-2','HomeController@insert');

Route::get('/response','HomeController@response');

Route::get('/views','HomeController@views');

Route::get('page-1','HomeController@page1');
Route::get('page-2','HomeController@page2');

Route::get('/control','HomeController@control');

Route::get('/select','DBController@select');

Route::get('/trans','DBController@trans');

Route::resource('/mysql','MySqlController');


//join的使用
Route::get('/join','DBController@join');

