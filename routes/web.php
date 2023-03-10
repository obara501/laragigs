<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
#URI String: /hello
Route::get('/hello', function () {
    return response('<h1>Hello World!</h1>');
});

#URI String: /posts/10
Route::get('/posts/{id}', function ($id) {
    ddd($id); #Die, dump and debug.
    return response('Post'. $id);
})->where('id', '[0-9]+');

#Search route.
#URI String: /search?name=jeff&city=nairobi
Route::get('/search', function (Request $request) {
    return $request->name .' '.$request->city;
});
*/

#Base URI. Load welcome view.
Route::get('/', function () {
    return view('welcome');
});

#All listings.
Route::get('/', function () {
    return view('listings', [
        'heading'=>'Latest Listings',
        'listings'=> Listing::all()
    ]);
});

#Single listing.
#URI string: "/lisitng/1"
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing'=> Listing::find($id)
    ]);
});
