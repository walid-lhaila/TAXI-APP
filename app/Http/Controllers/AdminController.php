<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\drivers;
use App\Models\passenger;
use App\Models\Route;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $driversCount = drivers::count();
        $passengersCount = passenger::count();
        $routesCount =  Route::count();
        return view ('admin.admin', compact('driversCount', 'passengersCount', 'routesCount'));
    }
    public function users()
    {
        $admins = Admin::all();
        $passengers = passenger::all();
        $drivers = drivers::all();

        return view('admin.users', compact('admins', 'passengers', 'drivers'));
    }

    public function routes()
    {
        $driversWithRoutes = drivers::with('routes')->get();
        return view('admin.routes' , compact('driversWithRoutes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
