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

Route::get('/', 'WelcomeController@index');

Route::get('/test', function(){
    return View::make('greeting')->with(['name'=>'wangronghui']);

});

Route::get('/test2', function(){
    return Response::json(['a'=>'aaa', 'b'=>'bbbb', 'pic_path'=>'http://www.baidu.com']);
});

// 文章
Route::resource('article', 'ArticleController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
