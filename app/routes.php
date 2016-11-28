<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login',array('uses'=>'Application@Login', 'as'=>'login'));
Route::post('login',array('uses'=>'Application@LoginAttempt', 'as'=>'login.attempt'));
Route::get('home',array('uses'=>'Application@Home', 'as'=>'application.home'));
Route::get('system/user/list','Users@AllList');
Route::post('system/user/insert','Users@Insert');
Route::post('system/user/update','Users@Update');
Route::post('system/user/login','Users@LogIn');
Route::post('system/user/updatepassword',array('before' => 'auth', 'uses' => 'Users@UpdatePassword'));
Route::post('system/user/changepassword','Users@ChangePassword');
Route::get('system/user/logout',array('before' => 'auth', 'uses' => 'Users@LogOut'));
Route::post('system/userInfo/insert','userInfos@Insert');
Route::post('system/userInfo/update','userInfos@Update');
Route::get('system/userInfo/get','userInfos@getUserInfo');
