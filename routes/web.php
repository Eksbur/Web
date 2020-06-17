<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index','ApiController@indexAction');
Route::get('/PL1','ApiController@PL1Action');
Route::get('/PL2','ApiController@PL2Action');
Route::get('/PL3','ApiController@PL3Action');
Route::get('/PL4','ApiController@PL4Action');
Route::get('/Bloodborne','ApiController@BloodborneAction');
Route::get('/Days_Gone','ApiController@Days_GoneAction');
Route::get('/God_of_War','ApiController@God_of_WarAction');
Route::get('/inFamous_Second_Son','ApiController@inFamous_Second_SonAction');
Route::get('/Login','ApiController@LoginAction');
Route::get('/Registr','ApiController@RegistrAction');
Route::get('/Shadow_of_the_Colossus','ApiController@Shadow_of_the_ColossusAction');
Route::get('/Spider_Man','ApiController@Spider_ManAction');
Route::get('/The_Last_of_Us','ApiController@The_Last_of_UsAction');
Route::get('/Uncharted_4','ApiController@Uncharted_4Action');
Route::get('/getArticle','ApiController@getArticles');