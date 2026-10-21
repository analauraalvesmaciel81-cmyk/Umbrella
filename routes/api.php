<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cadastro_aluno', [AlunoController::class, 'salvar_aluno']);
Route::get('/listar_alunos', [AlunoController::class, 'listar_alunos']);
Route::get('/listar_aluno_simples', [AlunoController::class, 'listar_aluno_simples']);
Route::put('/alterar_aluno', [AlunoController::class, 'alterar_aluno']);
Route::delete('/deletar_aluno', [AlunoController::class, 'deletar_aluno']);


Route::post('/cadastro_professor', [ProfessorController::class, 'cadastrar_professor']);
Route::get('/listar_professores', [ProfessorController::class, 'listar_professores']);
Route::get('/listar_professores_simples', [ProfessorController::class, 'listar_professores_simples']);
Route::put('/alterar_professor', [ProfessorController::class, 'alterar_professor']);
Route::delete('/deletar_professor', [ProfessorController::class, 'deletar_professor']);

