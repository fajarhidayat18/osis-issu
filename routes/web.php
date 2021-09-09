<?php

use App\Http\Controllers\AuthController;
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
Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', function () {
        return view('about.visi-misi');
    });
    Route::get('/anggota', function () {
        return view('about.member');
    });
    Route::get('/bidang-kegiatan', function () {
        return view('about.activity');
    });
});

Route::get('/mading-siswa', function () {
    return view('mading');
});




Route::get('/masuk', 'AuthController@login')->name('login')->middleware('guest');
Route::post('/masuk', 'AuthController@auth');

Route::get('/daftar', 'AuthController@register')->middleware('guest');
Route::post('/daftar', 'AuthController@store');

Route::post('/logout', 'AuthController@logout');

// jika user sudah login
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
    Route::resource('/anggota', MemberController::class);
    Route::resource('/galeri', GaleryController::class);
});