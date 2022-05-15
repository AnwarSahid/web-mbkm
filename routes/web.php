<?php

// use Illuminate\Routing\ViewsController;

use App\Http\Controllers\UploadController;
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
Route::get('/update-profile', [ViewsController::class, 'Updateprofile'])->name('updateprofile');
Route::put('/update-profile/{id}', [UploadController::class, 'Updateprofile'])->name('pushupdateprofile');
Route::get('/kontak-darurat', [ViewsController::class, 'Contact'])->name('contactemergency');
Route::post('/kontak-darurat', [UploadController::class, 'Contact'])->name('postcontactemergency');
Route::get('/informasi-akademik', [ViewsController::class, 'InfoAcedemic'])->name('infoacademic');
Route::get('/informasi-medis-dan-lainya', [ViewsController::class, 'InfoMedic'])->name('infomedic');
Route::get('/program-MBKM', [ViewsController::class, 'setMbkm'])->name('programmbkm');
Route::get('/learning-aggrement', [ViewsController::class, 'InfoLerningAggrement'])->name('learningaggrement');
Route::get('/personal-statement', [ViewsController::class, 'PersonalStatement'])->name('personalstatement');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
Route::get('/status', [ViewsController::class, 'status'])->name('status');
Route::get('/hasil-evaluasi', [ViewsController::class, 'HasilEvaluasi'])->name('hasilvaluasi');
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
