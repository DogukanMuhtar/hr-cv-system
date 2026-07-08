<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InternController;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('fgbfbfhbfhb', EmployeeController::class);
Route::patch('/employees/{employee}/status', [EmployeeController::class, 'updateStatus'])
    ->name('employees.updateStatus');
Route::resource('interns', InternController::class);
Route::patch('/interns/{intern}/status', [InternController::class, 'updateStatus'])
    ->name('interns.updateStatus');