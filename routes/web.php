<?php

use App\Http\Controllers\panelback\AdminController;
use App\Http\Controllers\panelback\StaffController;
use App\Http\Controllers\panelback\SupplierController;
use App\Http\Controllers\ProfileController;
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
// Route::get('/', function () {
//     return view('backend.index');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role:customer','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','role:admin')->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('index');
});

Route::middleware('auth','role:supplier')->group(function () {
    
    Route::get('supplier/dashboard',[SupplierController::class,'index'])->name('index');
    
});

Route::middleware('auth','role:staff')->group(function () {
    Route::get('staff/dashboard',[StaffController::class,'index'])->name('index');
});