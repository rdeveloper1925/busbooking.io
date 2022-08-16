<?php

namespace App\Http\Controllers;

use App\Mail\SendUserPassword;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //superadmin
        $users = User::all();
        //$roles = Role::all();
        //dd($users);
        return view('superadmin.users.index')->with(['users' => $users]);
    }

    public function login(Request $request)
    {
        //validate user input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return redirect(route('login'))->withErrors($validator)->withInput();
        }

        //verify user
        $isGood = Auth::attempt(["email" => $request->email, "password" => $request->password]);
        if ($isGood) {
            //check if they need to change password
            if (Auth::user()->mustChangePwd) {
                return view('superadmin.users.changePassword');
            } else {
                return Redirect(route('pages.dashboard'));
            }
        } else {
            return redirect(route('login'))->withErrors(['email' => "The credentials provided are invalid"])->withInput();
        }
    }

}
