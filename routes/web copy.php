<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/baru', [BaruController::class, 'index']);
    Route::get('/form', [BaruController::class, 'create']);
    Route::post('/store', [BaruController::class, 'store']);


    Route::get('/crud', [CrudController::class, 'index'])->name('crud');
    Route::get('/create', [CrudController::class, 'create']);
    Route::post('/store', [CrudController::class, 'store']);
    Route::get('/delete/{id}', [CrudController::class, 'delete']);
    Route::get('/edit/{id}', [CrudController::class, 'edit']);
    Route::get('/detail/{id}', [CrudController::class, 'detail']);
    Route::post('/update/{id}', [CrudController::class, 'update']);


    Route::prefix('/siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('siswa');
        Route::get('/create', [SiswaController::class, 'create']);
        Route::post('/store', [SiswaController::class, 'store']);
        Route::get('/delete/{id}', [SiswaController::class, 'delete']);
        Route::get('/edit/{id}', [SiswaController::class, 'edit']);
        Route::get('/detail/{id}', [SiswaController::class, 'detail']);
        Route::post('/update/{id}', [SiswaController::class, 'update']);
    });

    Route::prefix('/kelas')->group(function () {
        Route::get('/', [KelasController::class, 'index'])->name('kelas');
        Route::get('/create', [KelasController::class, 'create']);
        Route::post('/store', [KelasController::class, 'store']);
        Route::get('/delete/{id}', [KelasController::class, 'delete']);
        Route::get('/edit/{id}', [KelasController::class, 'edit']);
        Route::get('/detail/{id}', [KelasController::class, 'detail']);
        Route::post('/update/{id}', [KelasController::class, 'update']);
    });
});

require __DIR__ . '/auth.php';
