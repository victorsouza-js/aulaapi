<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use Illuminate\Http\Response;

class ProdutoController extends Controller
{

    public function index()
    {
        return Produto::all();
    }


    public function create()
    {
        //
    }


    public function store(StoreProdutoRequest $request)
    {
        $dadosValidados = $request->validated();
        $produto = Produto::create($dadosValidados);

        return response()->json([
            'message' => 'Criado com sucesso',
            'data' => $produto,
        ], Response::HTTP_OK);
    }


    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }


    public function update(UpdateProdutoRequest $request, Produto $produto)
    {
        //
    }


    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json([
            'message' => 'Apagado com sucesso',
        ], Response::HTTP_OK);
    }
}
