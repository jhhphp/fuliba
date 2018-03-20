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
Route::get('/ruby', 'HomeController@home')->name('/');
Route::get('/topic/{type?}','TopicController@topic')->name('topic');
Route::get('/topic/detail/{id}','TopicController@detail')->name('topic_detail');
Route::get('/member/{name}','MemberController@index')->name('member');//个人主页
Route::get('/setting/{name?}','MemberController@setting')->name('profile');//个人信息设置
Route::get('/login','Auth\LoginController@login')->name('login');
Route::get('/reg','Auth\RegisterController@reg')->name('reg');
Route::get('/search','SearchController@index')->name('search');
