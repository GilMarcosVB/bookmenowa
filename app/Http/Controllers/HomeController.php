<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
            
        return view('home');
    }


public function empresa(){
            
    $nomeSobrenome = "Gil Marcos";
    return view('empresa',[
        'nomeSobrenome' => $nomeSobrenome
    ]);
}

public function servicos(){

    $listaServicos = [

        'Empréstimo de livros',
        'Devolução de livros',
        'Listas de novos lançamentos',
        'Emprestimos de Ebooks',
        'Parceria e colaboração'

    ];

    return view ('servico',[
        'listaDeServicos' => $listaServicos
    ]);
}

}