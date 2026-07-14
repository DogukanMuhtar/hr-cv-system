<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\ApplicationController;

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

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('home');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('employees', EmployeeController::class);

    Route::patch('/employees/{employee}/status', [EmployeeController::class, 'updateStatus'])
        ->name('employees.updateStatus');

    Route::resource('interns', InternController::class);

    Route::patch('/interns/{intern}/status', [InternController::class, 'updateStatus'])
        ->name('interns.updateStatus');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.home');
});

require __DIR__.'/auth.php';
