<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

// would likely be a POST request from a form submission
Route::get('/subscribe', function () {
    Mail::to('timcook@apple.com')->send(
        new App\Mail\SubscriptionConfirmation('Tim Cook')
    );
});