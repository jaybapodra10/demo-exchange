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

Route::get('/', function () {
    return view('login');
});

Route::post('/account-list', function () {
    return view('account-list');
});

Route::get('/account-statement', function () {
    return view('account-statement');
});

Route::get('/add-account', function () {
    return view('add-account');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});

Route::get('/bet-dashboard', function () {
    return view('bet-dashboard');
});

Route::get('/current-bets', function () {
    return view('current-bets');
});

Route::get('/general-report', function () {
    return view('general-report');
});

Route::get('/profit-loss', function () {
    return view('profit-loss');
});
