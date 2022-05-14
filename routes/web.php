<?php

// use Illuminate\Routing\ViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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
Route::get('/update-profile', [ViewsController::class, 'updateprofile'])->name('update_profile');
Route::get('/kontak-darurat', [ViewsController::class, 'contact'])->name('contact');
Route::get('/informasi-akademik', [ViewsController::class, 'infoAcedemic'])->name('contact');
Route::get('/informasi-medis-dan-lainya', [ViewsController::class, 'infoMedic'])->name('contact');
Route::get('/program-MBKM', [ViewsController::class, 'setMbkm'])->name('contact');
Route::get('/learning-aggrement', [ViewsController::class, 'infoLerningAggrement'])->name('contact');
Route::get('/personal-statement', [ViewsController::class, 'personalStatement'])->name('contact');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
Route::get('/status', [ViewsController::class, 'status'])->name('contact');
Route::get('/hasil-evaluasi', [ViewsController::class, 'contact'])->name('contact');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
});
