<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Listing;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function store(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_name'] = auth()->user()->name;
        $formFields['listing_id'] = $listing->id;
        $formFields['date_posted'] = now()->format('Y-m-d');

        Review::create($formFields);

        return redirect('/listings/' . $listing->id)->with('message', 'Review created successfully!');
    }

    public function destroyListing(Listing $listing) {
        $reviews = Review::latest()->where('listing_id', $listing->id)->get();
        foreach ($reviews as $review) {
            $review->delete();
        }
    }

    public function destroyUser(User $user) {
        $reviews = Review::latest()->where('user_name', $user->name)->get();
        foreach ($reviews as $review) {
            $review->delete();
        }
    }
}
