<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalCategoryController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals.index');
Route::get('/hospitals/create', [HospitalController::class, 'create'])->name('hospitals.create');
Route::post('/hospitals', [HospitalController::class, 'store'])->name('hospitals.store');
Route::get('/hospitals/{id}/edit', [HospitalController::class, 'edit'])->name('hospitals.edit');
Route::put('/hospitals/{id}', [HospitalController::class, 'update'])->name('hospitals.update');
Route::delete('/hospitals/{id}', [HospitalController::class, 'destroy'])->name('hospitals.destroy');

//hospital-category


Route::get('/hospital-categories', [HospitalCategoryController::class, 'index'])->name('hospital_categories.index');
Route::get('/hospital-categories/create', [HospitalCategoryController::class, 'create'])->name('hospital_categories.create');
Route::post('/hospital-categories', [HospitalCategoryController::class, 'store'])->name('hospital_categories.store');
Route::get('/hospital-categories/{id}/edit', [HospitalCategoryController::class, 'edit'])->name('hospital_categories.edit');
Route::put('/hospital-categories/{id}', [HospitalCategoryController::class, 'update'])->name('hospital_categories.update');
Route::delete('/hospital-categories/{id}', [HospitalCategoryController::class, 'destroy'])->name('hospital_categories.destroy');

//properties-routes:


Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/{id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');
Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
