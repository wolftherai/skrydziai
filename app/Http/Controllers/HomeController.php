<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $airports = Airport::all();

        return view('index', compact('airports'));
    }
    public function support()
    {
        return view('pages.support');
    }
    public function findFlight(Request $request)
    {
        $from = $request->input('fromAirPort');
        $to = $request->input('toAirPort');
        $date = $request->input('departureDate');

        $flights = Flight::where('FromAirportId', $from)->where('ToAirportId', $to)->get();

        return view('pages.flights', compact('flights'));
    }
}
