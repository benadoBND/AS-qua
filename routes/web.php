<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('produto', [ProdutoController::class, 'index']);
Route::get('produto/create', [ProdutoController::class, 'create']);
Route::post('produto', [ProdutoController::class, 'store']);
Route::get('produto/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produto/{id}', [ProdutoController::class, 'update']);
Route::delete('produto/{id}', [ProdutoController::class, 'destroy']);