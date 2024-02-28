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

    // Load Create Listing Form
    public function create(){
        return view('listings.create');
    }

    // Create Listing
    public function store(Request $request){

        // Validate Form
        $formFields = $request->validate([
            'title' => 'required',
            'description' => ['required', 'max:50'],
            'tags' => 'required',
            'website' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => ['required', 'email:rfc'],
            'salary' => 'required'
        ]);


        return redirect('/');
    }
}
