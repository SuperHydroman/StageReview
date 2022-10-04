<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
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
        Route::get('/', [UserController::class, 'index'])->name('users.index');

        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');

        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('users.update');

        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
        Route::post('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // All pages related to roles
    Route::get('roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');

});

require __DIR__.'/auth.php';
