<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $drivers = drivers::all();
        return view('driver.driver', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function profileUpdate() {

        return view('driver.profile');
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
        return redirect('/login')->with('sucsses', 'Your Account Created Successfuly');
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
    public function updateProfile(Request $request, drivers $drivers)
    {  
        $driver = auth()->user();

        $request->validate([
            'new_name' => 'required|string|max:255',
            'new_username' => 'required|string|max:255',
            'new_matricule' => 'required|string|max:255',
            'new_phone' => 'required|string|max:255',
            'new_vehicle' => 'required|string|max',

        ]);
    
        $driver = auth()->user();
        $driver->name = $request->input('new_name');
        $driver->username = $request->input('new_username');
        $driver->matricule = $request->input('new_matricule');
        $driver->phone = $request->input('new_phone');
        $driver->vehicule = $request->input('new_vehicule');


        $driver->save();
            
            // Update other fields as needed
        
    
        return redirect('driver')->with('success', 'Profile Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drivers $drivers)
    {
        //
    }
}
