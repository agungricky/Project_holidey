<?php

use App\Http\Controllers\LpController;
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

// Route::get('LandingPage', [LpController::class, 'index']);

Route::view('LandingPage', 'Lp.landingPage');
Route::view('LandingPage', 'LP.akun');
// Route::view('LandingPage', 'LP.form_register');

// Route::get('TambahAkun', function () {
//     return view('Lp.form_register');
// });
