<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controller\Reserva_professorController;
use App\Http\Controllers\BibliotecariaController;
use App\Http\Middleware\LoginApiMiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cadastro_aluno', [AlunoController::class, 'salvar_aluno']);
Route::get('/listar_alunos', [AlunoController::class, 'listar_alunos']);
Route::get('/listar_aluno_simples', [AlunoController::class, 'listar_aluno_simples']);
Route::put('/alterar_aluno', [AlunoController::class, 'alterar_aluno']);
Route::delete('/deletar_aluno', [AlunoController::class, 'deletar_aluno']);
Route::post('/login_aluno', [AlunoController::class, 'login_aluno']);
Route::post('/logout_aluno', [AlunoController::class, 'logout_aluno']);


Route::post('/cadastro_professor', [ProfessorController::class, 'cadastrar_professor']);
Route::get('/listar_professores', [ProfessorController::class, 'listar_professores']);
Route::get('/listar_professores_simples', [ProfessorController::class, 'listar_professores_simples']);
Route::put('/alterar_professor', [ProfessorController::class, 'alterar_professor'])->middleware(LoginApiMiddleware::class);
Route::delete('/deletar_professor', [ProfessorController::class, 'deletar_professor'])->middleware(LoginApiMiddleware::class);
Route::post('/login_professor', [ProfessorController::class, 'login_professor']);
Route::post('/logout', [ProfessorController::class, 'logout']);

Route::post('/cadastrar_reserva_professor', [Reserva_professorController::class, 'cadastrar_reserva_professor']);
Route::get('/listar_reserva_professores', [Reserva_professorController::class, 'listar_reserva_professores']);
Route::put('/alterar_reserva_professor', [Reserva_professorController::class, 'alterar_reserva_professor']);
Route::delete('/deletar_reserva_professor', [Reserva_professorController::class, 'deletar_reserva_professor']);

Route::post('/cadastrar_bibliotecaria', [BibliotecariaController::class, 'cadastrar_bibliotecaria']);
Route::post('/login_bibliotecaria', [BibliotecariaController::class, 'login_bibliotecaria']);
Route::post('/logout_bibliotecaria', [BibliotecariaController::class, 'logout_bibliotecaria']);

