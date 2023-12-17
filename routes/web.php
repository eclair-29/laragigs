<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// COMMON RESOURCE ROUTES - NAMING CONVENTIONS
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing (post submit form)
// edit - Show form to edit listing
// update - Update listing (post edit submit form)
// destroy - Delete listing

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store/insert listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing data
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete single listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// test routes
Route::get('/helloworld', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('foo', 'bar'); // response with custom headers
});

Route::get('/posts/{id}', function ($id) {
    // dd() or ddd() are used for debugging
    // dd('log current post id: ' . $id); 
    return response('Post ' . $id);
})->where('id', '[0-9]+'); // route constraints

Route::get('/search', function (Request $request) {
    // dd($request);
    return $request->user . ' ' . $request->zipcode;
});
