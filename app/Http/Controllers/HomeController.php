<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetCategory;

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
        $assets = Asset::paginate(self::ITEMS_PER_PAGE);
        $assetCategories = AssetCategory::all();

        return view('welcome', [
            'assets' => $assets,
            'assetCategories' => $assetCategories,
        ]);
    }

    public function cars(AssetCategory $assetCategory = null)
    {
        if ($assetCategory) {
            $assets = $assetCategory->assets()->paginate(self::ITEMS_PER_PAGE);
        } else {
            $assets = Asset::paginate(self::ITEMS_PER_PAGE);
        }

        return view('pages.cars', [
            'assets' => $assets,
        ]);
    }
}
