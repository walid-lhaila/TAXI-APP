<?php

namespace App\Http\Controllers;

use App\Models\route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('driver.route');
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
        // Validate your form data
        $request->validate([
            'deparature' => 'required|string',
            'destination' => 'required|string',
            
            'driver_id' => 'required|exists:drivers,id',
        ]);
    
        // Create the route
        Route::create([
            'deparature' => $request->input('deparature'),
            'destination' => $request->input('destination'),
            'date_depart' => $request->input('depart'),
            'date_arrive' => $request->input('arrive'),
            'driver_id' => $request->input('driver_id'),
        ]);
    
        return redirect()->back()->with('success', 'Route added successfully');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(route $route)
    {
        //
    }
}
