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

Route::get('/index', function () {
    return view('index');
});

Route::get('/PL1', function () {
    return view('PL1');
});

Route::get('/PL2', function () {
    return view('PL2');
});

Route::get('/PL3', function () {
    return view('PL3');
});

Route::get('/PL4', function () {
    return view('PL4');
});

Route::get('/Bloodborne', function () {
    return view('Bloodborne');
});

Route::get('/Days_Gone', function () {
    return view('Days_Gone');
});

Route::get('/God_of_War', function () {
    return view('God_of_War');
});

Route::get('/inFamous_Second_Son', function () {
    return view('inFamous_Second_Son');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Registr', function () {
    return view('Registr');
});

Route::get('/Shadow_of_the_Colossus', function () {
    return view('Shadow_of_the_Colossus');
});

Route::get('/Spider_Man', function () {
    return view('Spider_Man');
});

Route::get('/The_Last_of_Us', function () {
    return view('The_Last_of_Us');
});

Route::get('/Uncharted_4', function () {
    return view('Uncharted_4');
});