<?php

use App\Http\Controllers\CompanyController;
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

Route::middleware('auth')->group(function () {

    // Homepage (companies.index)
    Route::get('/', [CompanyController::class, 'index'])->name('companies.index');

    // All pages related to companies
    Route::prefix('/companies')->group(function() {
        Route::get('/create', [CompanyController::class, 'create'])->name('companies.create');
        Route::post('/create', [CompanyController::class, 'store'])->name('companies.store');
        Route::get('/details/{id}', [CompanyController::class, 'details'])->name('companies.details');
    });

    // All pages related to users
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
    });
});

require __DIR__.'/auth.php';
