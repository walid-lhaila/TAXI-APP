<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use App\Models\passenger;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('passenger.passenger');
    }
    public function search(Request $request)
    {
        $placeOfSupport = $request->input('deparature');
        $destination = $request->input('destination');

        $driversWithRoutes = DB::table('drivers')
        ->join('routes', 'drivers.id', '=', 'routes.driver_id')
        ->where('routes.deparature', '=', $placeOfSupport)
        ->where('routes.destination', '=', $destination)
        ->select('drivers.*', 'routes.deparature', 'routes.destination')
        ->get(); 

        $driversWithRoutes = collect($driversWithRoutes)->map(function ($item) {
            $item->routes = Route::where('driver_id', $item->id)->get();
            return $item;
        });

        return view('passenger.reserve', compact('driversWithRoutes'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $driversWithRoutes = drivers::with('routes')->get();
        
        return view('passenger.reserve', compact('driversWithRoutes'));
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
