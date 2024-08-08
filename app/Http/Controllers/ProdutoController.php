<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function livros(){

        $listalivros =['livros1' , 'livros' , 'livros3' , 'livros4' , 'livros5' , 'livros6' , 'livros7' ];

        return view ('livros', ["listalivros" => $listalivros]);
    }
   
}

// return view ('produto',[
// 'listadeprodutos' => $listadeprotudos
// ]);
