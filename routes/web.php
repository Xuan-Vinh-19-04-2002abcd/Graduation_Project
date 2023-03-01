<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;

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



Route::get('dashboard', function () {
    return view('pages.index');
})->name("dashboard");;
Route::prefix("/custommer")->group(function () {
    Route::get("", [UserController::class, "getAllCustommer"])->name("customers.index");;
});
Route::prefix("pitch")->group(function () {
    Route::get("/", [PitchController::class, "showPitchs"])->name("pitchs.index");
    Route::post('/delete/{id}', [PitchController::class, "deletePitchs"])->name("pitchs.deletePitchs");
    Route::get('/add', [PitchController::class, "getAddForm"])->name("getAddForm");
    Route::post('/addForm',[PitchController::class,"postAddForm"])->name("postAddForm");
    Route::post('/edit/{id}', [PitchController::class, "editPitch"])->name("pitchs.editPitch");
    Route::post('/updateForm/{id}',[PitchController::class,"updateForm"])->name("updateform");

});
Route::prefix("post")->group(function(){
    Route::get("/", [PostController::class, "showPosts" ])->name("post.show");
    Route::post('/delete/{id}', [PostController::class, "deletePosts"])->name("post.delete");
});
Route::get("review", [ReviewController::class, "showReviews"])->name("showReviews");
Route::prefix("booking")->group(function () {
    Route::get("/", [BookingController::class, "showBookings"])->name("showBookings");;
});
Route::prefix("/")->group(function () {
    Route::get("/",[HomeController::class,"getAdmin"])->name("login.index");
    Route::post('/postLogin', [HomeController::class, "loginAdmin"])->name("loginAdmin");
});
Route::get("logout",[HomeController::class, "logout"]);
