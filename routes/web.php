<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/crearcategorias', function () {
    return Inertia::render('CrearCategorias');
})->middleware(['auth', 'verified'])->name('crearcategorias');

Route::get('/nosotros', fn () => Inertia::render('Nosotros'))->name('nosotros');
Route::get('/contacto', fn () => Inertia::render('Contacto'))->name('contacto');
Route::get('/welcome', fn () => Inertia::render('Welcome'))->name('welcome');
Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('categoria', [CategoriaController::class, 'verCategorias'])->name('categoria');
Route::delete('categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::prefix('crearcategorias')->middleware('auth')->group(function(){
Route::post('categoria',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::post('categorias/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
