<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/produto', function (Request $request) {
    $dados = [
        'nome' => 'victor',
        'idade' => '19'
    ];


    return response()->json($dados);
});
