<?php

use App\Http\Controllers\AddbookController;
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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/user', function () {
//     return view('user');
// });

Route::get('/add_book', function () {
    return view('add_book');
});

Route::get('/updateprofile',[UserController::class,'fetch1']);
Route::get('/viewprofile',[UserController::class,'fetch']);

Route::get('/view_book', function () {
    return view('view_book');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/view_book', [AddbookController::class, 'viewbook']);


 Route::post('/register', [UserController::class, 'register']);
 Route::post('/login',[UserController::class, 'login']);
 Route::post('/add_book',[AddbookController::class,'addbook']);
Route::post('/update',[UserController::class, 'update']);

