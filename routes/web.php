<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
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


Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);
//Show Edit Form Listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);
//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);





