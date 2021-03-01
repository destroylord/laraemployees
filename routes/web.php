<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController, EmployeeController};

Route::get('/dashboard',DashboardController::class);
Route::resource('employee', EmployeeController::class)
    ->except('show');
