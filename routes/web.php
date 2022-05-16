<?php

// use Illuminate\Routing\ViewsController;

use App\Http\Controllers\CrudController;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/update-profile', [ViewsController::class, 'Updateprofile'])->name('updateprofile');
    Route::put('/update-profile/{id}', [UploadController::class, 'Updateprofile'])->name('pushupdateprofile');
    Route::get('/kontak-darurat', [ViewsController::class, 'Contact'])->name('contactemergency');
    Route::post('/kontak-darurat', [CrudController::class, 'store'])->name('postcontactemergency');
    Route::put('/kontak-darurat/edit{id}', [CrudController::class, 'update'])->name('updatecontactemergency');
    Route::get('/informasi-akademik', [ViewsController::class, 'InfoAcedemic'])->name('infoacademic');
    Route::post('/informasi-akademik', [CrudController::class, 'storeAcademic'])->name('storeacademic');
    Route::put('/informasi-akademik{id}', [CrudController::class, 'updateAcademic'])->name('updateacademic');
    Route::get('/informasi-medis-dan-lainya', [ViewsController::class, 'InfoMedic'])->name('infomedic');
    Route::post('/informasi-medis-dan-lainya', [CrudController::class, 'storeMedic'])->name('storemedic');
    Route::put('/informasi-medis-dan-lainya/{id}', [CrudController::class, 'updateMedic'])->name('updatemedic');
    Route::get('/program-MBKM', [ViewsController::class, 'setMbkm'])->name('programmbkm');
    Route::post('/program-MBKM', [CrudController::class, 'storeMbkm'])->name('storembkm');
    Route::put('/program-MBKM/{id}', [CrudController::class, 'updateMbkm'])->name('updatembkm');
    Route::get('/learning-aggrement', [ViewsController::class, 'InfoLerningAggrement'])->name('learningaggrement');
    Route::post('/learning-aggrement', [CrudController::class, 'StoreLerningAggrement'])->name('store_LA');
    Route::put('/learning-aggrement/{id}', [CrudController::class, 'UpdateLerningAggrement'])->name('update_LA');
    Route::get('/personal-statement', [ViewsController::class, 'PersonalStatement'])->name('personalstatement');
    Route::post('/personal-statement', [CrudController::class, 'StorePersonalStatement'])->name('store_PS');
    Route::put('/personal-statement/{id}', [CrudController::class, 'UpdatePersonalStatement'])->name('update_PS');
    Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
    Route::get('/status', [ViewsController::class, 'status'])->name('status');
    Route::get('/hasil-evaluasi', [ViewsController::class, 'HasilEvaluasi'])->name('hasilvaluasi');
});

Route::middleware('auth')->group(function () {
});
