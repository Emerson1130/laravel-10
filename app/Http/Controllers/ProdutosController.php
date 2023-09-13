<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $TodosProdutos = Produto::all();
        return view('pages.produtos.paginacao', compact('TodosProdutos'));
    }
}
