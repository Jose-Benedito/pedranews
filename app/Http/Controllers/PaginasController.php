<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo; //carregando o model de artigo
use App\Models\Videoaula; //carregando a model de Videoaula
class PaginasController extends Controller

{
    public function index() {

        $artigos = Artigo::all(); // trazendo todos os dados da TABELA Artigo;
        $titulo = "Página inicial do Beneblog";
        return view('home', ['titulo'=>$titulo, 'artigos'=>$artigos]);


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
        $busca = request('search');
        return view('postagem', ['titulo'=>$titulo, 'busca'=>$busca]);
    }
    public function videoaula(){
        $videos = Videoaula::all();
        $titulo = "Páginas das videoaulas";
        return view('videoaula', ['titulo'=>$titulo, 'videos'=>$videos]);
    
    }
  public function postagens($id=null){
      $titulo = "Página das Postagens";
      return view('postagens', ['titulo'=>$titulo, 'id' => $id]);
 
  }


}
