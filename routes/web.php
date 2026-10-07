<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_html'])->name('cadastro_usuario');
Route::get('/cadastro_professor', [ProfessorController::class, 'professor_html'])->name('cadastro_professor');