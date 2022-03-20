<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller

{
    public function index() {
        $titulo = "Página inicial do Beneblog";
        return view('home', ['titulo'=>$titulo]);


    }
    public function sobre(){
        $nome = "João Carlos";
        $idade = 34;
        $titulo = "Página sobre do Blog";

        $array = [10, 123, 45, 58];
        $pessoas = ["Pamela", "Beatriz", "Ronaldo", "Isaura"];
        return view('sobre',
            [
                'titulo'=>$titulo,
                'nome'=>$nome,
                'idade'=>$idade,
                'array'=>$array,
                'pessoas'=>$pessoas
            ]);

    }
    public function postagem(){
        $titulo = "Páginas das postagens";
        return view('postagem', ['titulo'=>$titulo]);
    }
    public function videoaula(){
        $titulo = "Páginas das videoaulas";
        return view('videoaula', ['titulo'=>$titulo]);
    
    }


}

