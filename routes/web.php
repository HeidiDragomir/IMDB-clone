<?php

use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\MovieCommentsController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WatchlistController;
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

Route::get("/", [MovieController::class, "index"])->name("home");
Route::get("/movies/{movie:slug}", [MovieController::class, "show"]);

// Comments
Route::post("/movies/{movie:slug}/comments", [
    MovieCommentsController::class,
    "store",
]);
Route::get("/admin/dashboard/comments", [
    AdminCommentController::class,
    "index",
])->middleware("admin");
Route::post("/admin/dashboard/comments", [
    AdminCommentController::class,
    "store",
])->middleware("admin");
Route::patch("/admin/dashboard/comments/{comment}", [
    AdminCommentController::class,
    "approval",
])->middleware("admin");
Route::delete("/admin/dashboard/comments/{comment}", [
    AdminCommentController::class,
    "destroy",
])->middleware("admin");

// middleware = app/http/middleware. If your logged in you are not able to create and store.
Route::get("/register", [RegisterController::class, "create"])->middleware(
    "guest"
);
Route::post("/register", [RegisterController::class, "store"])->middleware(
    "guest"
);

Route::get("/login", [SessionsController::class, "create"])
    ->middleware("guest")
    ->name("login");

Route::post("/sessions", [SessionsController::class, "store"])->middleware(
    "guest"
);

// middleware = app/http/middleware. If your are a guest you are not able to logout.
Route::post("logout", [SessionsController::class, "destroy"])->middleware(
    "auth"
);

// Watchlist
Route::post("/movie/{movie:slug}/add", [
    WatchlistController::class,
    "store",
])->middleware("auth");
Route::get("/watchlist", [WatchlistController::class, "show"])->middleware(
    "auth"
);
Route::delete("/movie/watchlist/delete", [
    WatchlistController::class,
    "destroy",
])->middleware("auth");

// Admin Movies
Route::get("/admin/dashboard", [
    SessionsController::class,
    "authAdmin",
])->middleware("admin", "auth");

Route::post("/admin/dashboard/movies", [
    AdminMovieController::class,
    "store",
])->middleware("admin");

Route::get("/admin/dashboard/movies/create", [
    AdminMovieController::class,
    "create",
])->middleware("admin");

Route::get("/admin/dashboard/movies", [
    AdminMovieController::class,
    "index",
])->middleware("admin");
Route::get("/admin/dashboard/movies/{movie}/edit", [
    AdminMovieController::class,
    "edit",
])->middleware("admin");
Route::patch("/admin/dashboard/movies/{movie}", [
    AdminMovieController::class,
    "update",
])->middleware("admin");
Route::get("/admin/dashboard/movies/{movie}", [
    AdminMovieController::class,
    "update",
])->middleware("admin");
Route::delete("/admin/dashboard/movies/{movie}", [
    AdminMovieController::class,
    "destroy",
])->middleware("admin");

// Admin Users

Route::get("/admin/dashboard/users", [
    AdminUserController::class,
    "index",
])->middleware("admin");

Route::get("/admin/dashboard/users/{user}/edit", [
    AdminUserController::class,
    "edit",
])->middleware("admin");

Route::post("/admin/dashboard/users", [
    AdminUserController::class,
    "store",
])->middleware("admin");

Route::get("/admin/dashboard/users/create", [
    AdminUserController::class,
    "create",
])->middleware("admin");

Route::patch("/admin/dashboard/users/{user}", [
    AdminUserController::class,
    "update",
])->middleware("admin");

Route::get("/admin/dashboard/users/{user}", [
    AdminUserController::class,
    "update",
])->middleware("admin");

Route::delete("/admin/dashboard/users/{user}", [
    AdminUserController::class,
    "destroy",
])->middleware("admin");

/* Route::get("/categories/{category}", function (Category $category) {
    return view("categories", [
        "movies" => $category->movies,
    ]);
});

Route::get("/genre", function () {
    return view("genre");
}); */
