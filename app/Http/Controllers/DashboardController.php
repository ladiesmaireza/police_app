<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function vehicles()
    {
        $vehicles = Vehicle::all();

        return view('dashboard.vehicles', compact('vehicles'));
    }
}


