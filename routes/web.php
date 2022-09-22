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
    Route::get('/', [CompanyController::class, 'index'])->name('companies.index');

    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
    });
});

require __DIR__.'/auth.php';
