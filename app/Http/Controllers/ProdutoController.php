<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function index()
{
    $produtos = Produto::all();
    return view('Produto.index', compact('Produto'));
}

public function create()
{
    return view('Produto.create');
}

public function store(Request $request)
{
    Produto::create($request->all());
    return redirect('Produto')->with('success', 'Produto created successfully.');
}

public function edit($id)
{
    $produto = Produto::findOrFail($id);
    return view('Produto.edit', compact('Produto'));
}

public function update(Request $request, $id)
{
    $produto = Produto::findOrFail($id);
    $produto->update($request->all());
    return redirect('Produto')->with('success', 'Produto updated successfully.');
}

public function destroy($id)
{
    $produto = Produto::findOrFail($id);
    $produto->delete();
    return redirect('Produto')->with('success', 'Produto deleted successfully.');
}
}
