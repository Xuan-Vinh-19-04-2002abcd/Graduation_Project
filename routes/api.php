<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Services\Implementations\AccountService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/fogotpassword', [RegisterController::class, 'fogotPassword']);
Route::post('/login', [AuthController::class,'login']);
Route::post("/user",[RegisterController::class,"getUser"]);
Route::post("/updateUser",[RegisterController::class,"updateUser"]);

Route::get("/pitchs", [PitchController::class, "getallPitchs"]);
Route::get("/pitchs/detail", [PitchController::class, "getDetailPitch"]);
Route::post("/pitchs/search", [PitchController::class, "searchPitch"]);


Route::post("/posts", [PostController::class, "createPost"]);
Route::get("/allposts", [PostController::class, "getAllPosts"]);


Route::post("/bookings", [BookingController::class, "createBooking"]);
Route::get("/allbookings", [BookingController::class, "getAllBookings"]);
Route::post("/bookings/search", [BookingController::class, "searchBooking"]);
Route::get("/detailBooking", [BookingController::class, "detailBooking"]);
Route::post("/matchSocer",[BookingController::class,"Match"]);
Route::post("/showMatch",[BookingController::class,"showMaths"]);


Route::post("/matchs", [MatchController::class, "matchSocer"]);


Route::post("/reviews", [ReviewController::class, "getallReviews"]);