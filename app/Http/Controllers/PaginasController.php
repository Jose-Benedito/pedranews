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
        $titulo = "Página sobre do Blog";
        return view('sobre', ['titulo'=>$titulo]);

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

