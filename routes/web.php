<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalCategoryController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LabTestController;
use App\Http\Controllers\BookingController;


// Route::get('/', function () {
//     return view('welcome');
// });

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



// ✅ Manually register routes for hospital categories (because you're not using resource here)
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



//medicine route
Route::get('/medicine', [MedicineController::class, 'create'])->name('medicine.create');
Route::post('/medicine', [MedicineController::class, 'store'])->name('medicine.store');
Route::get('/admin/medicine', [MedicineController::class, 'adminIndex'])->name('medicine.admin.index');
Route::get('/medicine/{id}/edit', [MedicineController::class, 'edit'])->name('medicine.edit');
Route::put('/medicine/{id}', [MedicineController::class, 'update'])->name('medicine.update');
Route::delete('/medicine/{id}', [MedicineController::class, 'destroy'])->name('medicine.destroy');
Route::put('/medicine/{id}/status', [MedicineController::class, 'updateStatus'])->name('medicine.updateStatus');
Route::get('/medicine/{id}', [MedicineController::class, 'show'])->name('medicine.show');
Route::get('/medicine/{id}', [MedicineController::class, 'show'])->name('medicine.show');
     //medicine category


     use App\Http\Controllers\MedicineCategoryController;

// Display all categories
Route::get('/medcategories', [MedicineCategoryController::class, 'index'])->name('medcategories.index');

// Show the create form
Route::get('/medcategories/create', [MedicineCategoryController::class, 'create'])->name('medcategories.create');

// Store a new category
Route::post('/medcategories', [MedicineCategoryController::class, 'store'])->name('medcategories.store');

// Show the edit form
Route::get('/medcategories/{id}/edit', [MedicineCategoryController::class, 'edit'])->name('medcategories.edit');

// Update the category
Route::put('/medcategories/{id}', [MedicineCategoryController::class, 'update'])->name('medcategories.update');

// Delete a category
Route::delete('/medcategories/{id}', [MedicineCategoryController::class, 'destroy'])->name('medcategories.destroy');



//order route
Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/admin/order', [OrderController::class, 'adminIndex'])->name('order.admin.index');
Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::put('/order/{id}/status', [OrderController::class, 'updateStatus'])->name('order.updateStatus');

// Booking routes (only create and store)
Route::get('bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');


//hospital-category

Route::resource('hospitals', HospitalController::class);


Route::resource('labs', LabController::class);
Route::resource('lab_tests', LabTestController::class);

//surgeries

Route::resource('surgeries', SurgeryController::class);

//shop

Route::resource('shops', ShopController::class);

//doctors

Route::resource('doctors', DoctorController::class);

//

Route::resource('diseases', DiseaseController::class);

//category:

Route::resource('categories', CategoryController::class);