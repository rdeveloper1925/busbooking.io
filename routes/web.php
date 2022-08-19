<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::middleware(['auth'])->group(function () {
    //*******strictly uat: make currently logged in person super admin */
    Route::get("/make-super-admin", function () {
        $superAdminPermission = Permission::create(['name' => 'sudo']);
        $superAdminRole = Role::create(["name" => "super-admin"]);
        $superAdminRole->givePermissionTo($superAdminPermission);
    });

    Route::get("/elevate", function () {
        try {
            Auth::user()->assignRole("super-admin");
            return "You " . Auth::user()->name . " have not been elevated to super-admin";
        } catch (Exception $e) {
            dd($e);
        }
    });
    //*******strictyly uat */

    //TODO: Initial sacaffold
    //1. create all the user roles and permissions
    //teller
    // $tellerRole=Role::create(['name'=>"teller"]);
    // $tellerRole->givePermissionTo()

    //End initial scaffold
    //Dashboard route
    Route::get("/dashboard", "App\Http\Controllers\PagesController@dashboard")->name('pages.dashboard');
    //change Password route
    Route::get('/startpwdchange', "App\Http\Controllers\PagesController@startpwdchange")->name('startpwdchange');

    Route::resource("/user", UsersController::class);
    Route::resource(
        "/driver",
        DriverController::class
    );
    Route::resource(
        "/branch",
        BranchController::class
    );
    Route::resource("/bus", BusController::class);
    Route::resource("/route", RouteController::class);

    //Reports
    Route::get("/report/teller", "App\Http\Controllers\ReportsController@tellerReport");
    Route::get("/report/bus", "App\Http\Controllers\ReportsController@busReport");
});


//Login submission route
Route::post('/doLogin', "App\Http\Controllers\UsersController@login")->name('dologin');
//Logout route
Route::get("/logout", "App\Http\Controllers\UsersController@logout")->name('logout');
