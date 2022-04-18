<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo; //carregando o model de artigo
use App\Models\Noticia; //carregando a model de Videoaula
class PaginasController extends Controller

{
    public function index() {

        $noticias = Noticia::latest()->simplePaginate(3); // trazendo os últimos dados da TABELA Artigo;
        $titulo = "Pedra News";
        return view('home', ['titulo'=>$titulo, 'noticias'=>$noticias]);


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
  /*  public function videoaula(){
        $videos = Videoaula::latest()->paginate(10);
        $titulo = "Videoaulas";
        return view('videoaula', ['titulo'=>$titulo, 'videos'=>$videos]);
    
    } */
    public function videopost(){
        
        $titulo = "Postagem de videos";
        return view('videopost', ['titulo'=>$titulo]);
    
    }
  public function noticias($id=null){
      $titulo = "Página das Postagens";
      return view('noticias', ['titulo'=>$titulo, 'id' => $id]);
 
  }
  public function store(Request $request){
      $post = new Noticia;

      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->body = $request->body;
      $post->data_post = $request->data_post;
    
      $post->foto_desc = $request->foto_desc;

      //uplod da foto(imagem)
      if($request->hasFile('foto')&& $request->file('foto')->isValid()){
          $requestImage = $request->foto;
          $extension = $requestImage->extension();
          $imageName = md5($requestImage->foto->getClientOriginalName().strtotime("now"));
          $request->foto->move(public_path('img/fotos'));
      }

      $post->save();

      return redirect('/');
  }
 /* public function store_video(Request $request){
   // $post = new Videoaula;

    $post->title = $request->title;
    $post->url = $request->url;
    $post->description = $request->description;
    $post->data_post = $request->data_post;

    $post->save();

    return redirect('videoaula');
}
*/

}
