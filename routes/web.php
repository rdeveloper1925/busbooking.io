<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UsersController;
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

//Login view
Route::get('/', function () {
    return view('auth.login');
})->name('login');

//Dashboard route
Route::get("/dashboard", "App\Http\Controllers\PagesController@dashboard")->name('pages.dashboard');
//Login submission route
Route::post('/doLogin', "App\Http\Controllers\UsersController@login")->name('dologin');
//Logout route
Route::get("/logout", "App\Http\Controllers\UsersController@logout")->name('logout');

Route::get('/startpwdchange', "App\Http\Controllers\PagesController@startpwdchange")->name('startpwdchange');


Route::resource("/user",UsersController::class);
Route::resource("/driver", DriverController::class);
Route::resource("/branch", BranchController:: class);
Route::resource("/bus", BusController::class);
Route::resource("/route", RouteController::class);

//Reports
Route::get("/report/teller", "App\Http\Controllers\ReportsController@tellerReport");
Route::get("/report/bus", "App\Http\Controllers\ReportsController@busReport");
