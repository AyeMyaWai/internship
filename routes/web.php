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
Route::post('forgetpw','TestController@forgetpw')->name('forgetpw');

Route::get('/testarray', 'HomeController@array');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('dashboard',function(){
    // dd(auth()->user());

    // if(auth()->user()->role == 'admin'){
    //     return view('admin.dashboard');
    // }else if(auth()->user()->role == 'guest'){
    //     return 'hello guest';
    // }else{
    //     return 'hello user';
    // }

    return view('admin.dashboard');
})->name('dashboard');

Route::middleware('can:isAdmin')->prefix('admin')->group(function () {
    // Mention all admin routes
    Route::get('/', 'AdminController@array');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout')->name('logout');

