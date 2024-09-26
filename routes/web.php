<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardController as ControllersDashboardController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Admin\ResourcePostController;

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

Route::get('/' , [PageController::class , 'index'])->name('home');

Route::middleware('auth')
        ->prefix('profile')
        ->name('profile.')
        ->group(function(){
            Route::get('/' , [ProfileController::class , 'edit'])->name('edit');
            Route::get('/' , [ProfileController::class , 'update'])->name('update');
            Route::get('/' , [ProfileController::class , 'destroy'])->name('destroy');
        });

Route::middleware('auth')
        ->prefix('admin')
        ->name('admin.')
        ->group(function(){
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('posts' , ResourcePostController::class);
        });

require __DIR__.'/auth.php';
