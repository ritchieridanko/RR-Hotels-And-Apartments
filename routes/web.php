<?php

use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('login');

// authentication
Route::get('/login')->middleware("guest");
Route::post('/login', [UserController::class, 'authenticate']);

// register an account
Route::post('/register', [UserController::class, 'store']);

// logging out
Route::post('/logout', [UserController::class, 'logout']);

// hotels
Route::get('/hotels', function () {
    return view('hotel', ['title' => 'Hotels']);
});

// Route::get('/hotels/{hotel:name}/reservation', HotelController::class, 'index');

// apartments
Route::get('/apartments', function () {
    return view('apartment', ['title' => 'Apartments']);
});

Route::get('/dashboard', [UserController::class, 'index'])->middleware("auth");

// Route::get('/', [HomeController::class, 'index']);
// $variable->posts->load('cat1', 'cat2');
