<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('movies');
}); */

Route::get('/', function (Category $category) {
    return view('movies', [
        'movies' => $category::all()
    ]);
});

Route::get('/movie', function () {
    return view('movie');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/genre', function () {
    return view('genre');
});
// middleware = app/http/middleware. If your logged in you are not able to create and store.
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

// middleware = app/http/middleware. If your are a guest you are not able to logout.
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/categories/{category}', function (Category $category) {
    return view('categories', [
        'movies' => $category->movies
    ]);
});


