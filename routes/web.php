<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/empresa', [HomeController::class, 'empresa']);

Route::get('/servicos', [HomeController::class, 'servicos']);

Route::get('/produtos', [HomeController::class, 'produtos']);



route::get('/livros',[ProdutoController::class,'livros']);


Route::get('/produto', function(){

    $nomeproduto = "star link";

    return view('produto',compact("nomeproduto"));;

});


