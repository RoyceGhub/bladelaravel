<?php

use App\Models\PersonalInformation;
use App\Http\Controllers\PersonalInformationController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile', ['type' => 'pogi']);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/profile', 'App\Http\Controllers\PersonalInformationController@index')->name('profile');


Route::post('/create', [PersonalInformationController::class, 'store'])->name('create');

// Route::post('/create', array('as' => 'create_profile', 'uses' => 'PersonalInformationController@store'));