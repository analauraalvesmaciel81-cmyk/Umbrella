<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cadastro_usuario', [UsuarioController::class, 'salvar_usuario']);

Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario']);

Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios']);

Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples']);

Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario']);

Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario']);
