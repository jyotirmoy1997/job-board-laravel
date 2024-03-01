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
            'description' => ['required', 'max:500'],
            'tags' => 'required',
            'website' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => ['required', 'email:rfc'],
            'salary' => 'required'
        ]);

        // Creating the listing from formdata
        Listing::create($formFields);

        return redirect('/');
    }
}


// Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam ab. Voluptas eos, neque aperiam dicta itaque corrupti odio voluptatum eum quaerat distinctio a quod nisi error rerum iure recusandae?