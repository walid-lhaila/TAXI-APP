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
        $validateData = $request->validate([
            'departure' => 'required',
            'destination' => 'required',
        ]);
        

        $validatedData['driver_id'] = Auth::guard('driver')->id();
        Route::create($validatedData);

        return redirect()->route('auth.login')->with('success', 'Route created successfully');
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
