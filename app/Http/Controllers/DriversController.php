<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('driver.driver');
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
        $driver = drivers::create([
            'name'=> $request->input('name'),
            'vehicule'=> $request->input('vehicule'),
            'phone'=> $request->input('phone'),
            'matricule'=> $request->input('matricule'),
            'role'=>"driver",
            'username'=> $request->input('username'),
            'password'=> $request->input('password'),
        ]);
        return redirect('login')->with('sucsses', 'Your Account Created Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(drivers $drivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(drivers $drivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, drivers $drivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drivers $drivers)
    {
        //
    }
}
