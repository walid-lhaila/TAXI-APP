<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\drivers;
use App\Models\passenger;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('auth.register');
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $username = $request->input('username');
        $password = $request->input('password');
        
        $admin = Admin::where('username', $username)->first();
        if ($admin && $password === $admin->password){
            Auth::login($admin);
            return redirect()->route('admin.admin');
        }


        $driver = drivers::where('username', $username)->first();
        if($driver && $password === $driver->password){
            Auth::login($driver);
            return redirect()->route('driver.driver');
        }


        $passenger = passenger::where('username', $username)->first();
        if($passenger && $password === $passenger->password){
            Auth::login($passenger);
            return redirect()->route('passenger.passenger');
        }
        return view('auth.login');
    }
}
