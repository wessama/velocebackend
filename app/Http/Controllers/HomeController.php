<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\FilterRequest;
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

    public function search()
    {
        $assetCategories = AssetCategory::all();

        $results = session('results', collect());

        if($results->isEmpty()) {
            $results = Asset::paginate(self::ITEMS_PER_PAGE);
        }

        return view('pages.search', [
            'assetCategories' => $assetCategories,
            'results' => $results,
        ]);
    }

    public function filter(FilterRequest $request)
    {
        $request->flash();

        $assets = Asset::when($request->asset_category !== 'any', function ($query) use ($request) {
                return $query->where('category_id', $request->asset_category);
            })
            ->when(strtolower($request->passengers) !== 'any', function($query) use ($request) {
                // Retrieve amenities that have a name containing the specified number of passengers
                $amenityName = $request->passengers . ' Passengers';

                return $query->whereHas('amenities', function ($subQuery) use ($amenityName) {
                    $subQuery->where('name', $amenityName);
                });
            })
            ->when($request->sort, function ($query, $sort) {
                if ($sort === 'high-to-low') {
                    return $query->orderBy('price', 'desc');
                } elseif ($sort === 'low-to-high') {
                    return $query->orderBy('price', 'asc');
                } elseif ($sort === 'asc') {
                    return $query->orderBy('name', 'asc');
                } elseif ($sort === 'desc') {
                    return $query->orderBy('name', 'desc');
                }

                return $query;
            })
            ->paginate(self::ITEMS_PER_PAGE);

        return redirect()->route('frontend.cars.search')->with([
                'results' => $assets,
            ]);
    }
}
