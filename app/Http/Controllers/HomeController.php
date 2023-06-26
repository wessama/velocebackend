<?php

namespace App\Http\Controllers;

use App\Models\Asset;

class HomeController extends Controller
{
    private const ITEMS_PER_PAGE = 6;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Asset::paginate(self::ITEMS_PER_PAGE);

        return view('welcome', [
            'cars' => $cars,
        ]);
    }
}
