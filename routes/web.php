<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if (Auth::check()) return redirect()->route('dashboard');

    return redirect()->route('login');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::prefix('administradores')->name('administradores.')->group(function () {
        Route::middleware(['is.admin'])->group(function () {
            Route::get('', [UsuarioController::class, 'index'])->name('index');
            Route::get('adicionar', [UsuarioController::class, 'create'])->name('create');
            Route::post('', [UsuarioController::class, 'store'])->name('store');
            Route::get('{admin}/editar', [UsuarioController::class, 'edit'])->name('edit');
            Route::put('{admin}', [UsuarioController::class, 'update'])->name('update');
        });

        Route::post('mudar-senha', [UsuarioController::class, 'changePassword'])->name('change.password');
        Route::post('salvar-senha', [UsuarioController::class, 'savePassword'])->name('save.password');
    });
    Route::get('/offer', [OfferController::class, 'add'])->name('offer.add');
    Route::post('/offer', [OfferController::class, 'store'])->name('offer.store');
    Route::delete('{offer}', [OfferController::class, 'destroy'])->name('offer.destroy');
});