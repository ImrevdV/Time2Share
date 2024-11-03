<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    public function index() {
        if (auth()->check()) {
            return view('listings.index', [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->whereNull('lender_name')->get(),
                'listings_lending' => Listing::latest()->where('lender_name', auth()->user()->name)->get()
            ]);
        } else {
            return view('listings.index', [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->whereNull('lender_name')->get()
            ]);
        }
    }

    public function indexAdmin() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('imgs', 'public');
        }

        $formFields['owner_name'] = auth()->user()->name;

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function lend(Listing $listing) {
        $listing->update([
            'lender_name' => auth()->user()->name,
            'return_date' => now()->addWeek()->format('Y-m-d')
        ]);

        return redirect('/')->with('message', 'You are now lending ' . $listing->title);
    }

    public function return(Listing $listing) {
        $listing->update([
            'lender_name' => null,
            'return_date' => null
        ]);

        return redirect('/')->with('message', 'You returned ' . $listing->title)->with('return', true);;
    }
}
