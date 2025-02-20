<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/proyectos/pdf', [ProyectoController::class, 'generarPDF'])->name('proyectos.pdf');
Route::resource('proyectos', ProyectoController::class);
Route::get('proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
