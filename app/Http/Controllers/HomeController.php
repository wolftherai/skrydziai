<?php

namespace App\Http\Controllers;

use App\Models\Airport;
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
}
