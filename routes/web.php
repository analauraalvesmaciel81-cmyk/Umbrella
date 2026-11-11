<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibliotecariaController;
use App\Http\Middleware\LogadoWebMiddleWare;
use App\Http\Middleware\LogadoBibliotecariaMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_html'])->name('cadastro_usuario');
Route::get('/cadastro_professor', [ProfessorController::class, 'professor_html'])->name('cadastro_professor');
Route::get('/reserva_aluno', [AlunoController::class, 'aluno_html'])->name('reserva_aluno');
Route::get('/login', [LoginController::class, 'login_html'])->name('login');
Route::get('/home', [HomeController::class, 'mostrarHome'])->middleware(LogadoWebMiddleWare::class)->name('home');

Route::get('/painel_bibliotecaria', [BibliotecariaController::class, 'mostrarBibliotecaria'])->middleware(LogadoBibliotecariaMiddleware::class)->name('painel_bibliotecaria');