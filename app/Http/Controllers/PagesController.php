<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Bus;
use App\Models\Driver;
use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        $buses=Bus::count();
        $branches=Branch::count();
        $drivers=Driver::count();
        $routes=Route::count();
        $operators=User::count();
        dd([$buses, $branches, $drivers, $routes, $operators]);
        return view("dashboard")->with([$buses,$branches,$drivers,$routes,$operators]);
    }

    public function startpwdchange(){
        return view('superadmin.users.changePassword');
    }
}
