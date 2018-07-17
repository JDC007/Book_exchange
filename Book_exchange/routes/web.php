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

Route::get('/index', 'IndexController@showIndex');

Route::get('/signup', 'SignupController@showSignup');

Route::get('/login', 'LoginController@showLogin');

Route::get('/logout', 'LogoutController@showLogout');

Route::get('/account-info', 'AccountinfoController@showAccountinfo');

Route::get('/account-myads', 'AccountmyadsController@showAccountmyads');

Route::get('/all-posts', 'AllpostsController@showAllposts');

Route::get('/post-ads', 'PostadsController@showPostads');

Route::get('/post-details', 'PostdetailsController@showPostdetails');
