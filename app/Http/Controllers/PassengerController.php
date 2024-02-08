<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use App\Models\passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('passenger.passenger');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = drivers::all();
        
       return view('passenger.reserve' , compact('drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function passengerStore(Request $request)
    {
        $passenger = passenger::create([
            'name'=>$request->input('name'),
            'last_name'=>$request->input('Lname'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'role'=>"passanger",
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
        ]);

        return redirect('/login')->with('succses', 'Your Account Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(passenger $passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(passenger $passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, passenger $passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(passenger $passenger)
    {
        //
    }
}
