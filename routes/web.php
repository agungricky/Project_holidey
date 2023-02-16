<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::view('Lolo', 'welcome');

Route::get('halo', function () {
    return 'Halo Ricky';
});

Route::get('product/{id}', function ($id) {
    return view('landingpage.akun', ['id' => $id]);
});


Route::redirect('about', 'about_sementara');


Route::get('/user', [UserController::class, 'index']);
Route::get('ika', function () {
    return 'ika cantik';
});

Route::view('i', 'welcome');

Route::get('/admin', [userController::class, 'index']);

Route::redirect('home', 'home_sementara');

Route::get('product/{id}', function ($id) {
    return 'anda membuka product' . $id;
});

Route::get('product/{id}', function ($id) {
    return view('landingpage.akun', ['id' > $id]);
});
