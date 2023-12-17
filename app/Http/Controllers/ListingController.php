<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // get all listings
    public function index()
    {
        // dd(request(['tag', 'search']));
        // dd(Listing::latest()->filter(request(['tag', 'search']))->paginate(10));
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    // get single listing
    public function show(Listing $listing)
    {
        // dd(Listing::find($id));
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form
    public function create()
    {
        return view('listings.create');
    }

    // store/insert listing data
    public function store(Request $request)
    {
        // dd($request->all());
        // dd(request()->file('logo'));
        $inputs = $request->validate([
            'title' => 'required',
            'organization' => ['required', Rule::unique('listings', 'organization')],
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('logo')) $inputs['logo'] = $request->file('logo')->store('logos', 'public');

        Listing::create($inputs);

        return redirect('/')->with('success', 'Successfully posted a gig');
    }

    // show edit form
    public function edit(Listing $listing)
    {
        // dd($listing->title);
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    // update listing data
    public function update(Request $request, Listing $listing)
    {
        $edits = $request->validate([
            'title' => 'required',
            'organization' => 'required',
            'location' => 'required',
            'description' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('logo')) $edits['logo'] = $request->file('logo')->store('logos', 'public');

        $listing->update($edits);

        return back()->with('success', 'Successfully updated gig');
    }

    // delete single listing
    public function destroy(Listing $listing)
    {
        // dd($listing);
        $listing->delete();
        return redirect('/')->with('success', 'Successfully deleted gig');
    }
}
