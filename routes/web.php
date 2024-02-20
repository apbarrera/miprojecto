<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Rutas para mostrar la lista y el formulario de creación de productos
Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('producto.store');

// Rutas para mostrar los detalles, el formulario de edición y para actualizar y eliminar productos
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');
