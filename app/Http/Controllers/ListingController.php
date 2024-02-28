<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    // Show all Listings
    public function index(Request $request){
        $searchString = $request->search;
        $locString = $request->loc;
        return view('listings.index', [
            'listings' => Listing::latest()->filter([$searchString, $locString])->get()
        ]);
    }

    // Show single Listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
