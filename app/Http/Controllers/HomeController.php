<?php

namespace App\Http\Controllers;

use App\Models\Asset;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Asset::all();

        return view('welcome', compact('cars'));
    }
}
