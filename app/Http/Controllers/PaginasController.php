<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo; //carregando o model de artigo
use App\Models\Videoaula; //carregando a model de Videoaula
class PaginasController extends Controller

{
    public function index() {

        $artigos = Artigo::latest()->simplePaginate(2); // trazendo os últimos dados da TABELA Artigo;
        $titulo = "Pedra News";
        return view('home', ['titulo'=>$titulo, 'artigos'=>$artigos]);


    }
    public function sobre(){
        $nome = "João Carlos";
        $idade = 34;
        $titulo = "Sobre mim";

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
        $videos = Videoaula::latest()->paginate(10);
        $titulo = "Videoaulas";
        return view('videoaula', ['titulo'=>$titulo, 'videos'=>$videos]);
    
    }
    public function videopost(){
        
        $titulo = "Postagem de videos";
        return view('videopost', ['titulo'=>$titulo]);
    
    }
  public function postagens($id=null){
      $titulo = "Página das Postagens";
      return view('postagens', ['titulo'=>$titulo, 'id' => $id]);
 
  }
  public function store(Request $request){
      $post = new Artigo;

      $post->title = $request->title;
      $post->description = $request->description;
      $post->data_post = $request->data_post;

      $post->save();

      return redirect('/');
  }
  public function store_video(Request $request){
    $post = new Videoaula;

    $post->title = $request->title;
    $post->url = $request->url;
    $post->description = $request->description;
    $post->data_post = $request->data_post;

    $post->save();

    return redirect('videoaula');
}


}
