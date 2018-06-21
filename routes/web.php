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


// Route::get('/', function () {
//     return view('site/home');
// });

Route::get('/', function () {
    return view('site/newHome');
});

/* ======================================================= */

// Route::get('/', function () {
//     return view('welcome');
// });


// // Route::get('/mass', 'MassUpdatePassword@index');
// Route::get('/teste', 'AuthController@showLoginForm');
// Route::post('/logout', 'AuthController@logout')->name('logout');

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/logged', function () {
//         $jsonUser   = Auth::user();

//         return view('logged');
//     });
// });

// // Route::Auth();

// Route::post('/login', 'AuthController@login')->name('login');

// Route::get('/home', 'HomeController@index')->name('home');
