<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')





<!-- Postagens -->

@foreach($manchetes as $manchete )
  <div class="container col-lg-10">
  <div class="card" style="width:45rem ; margin-bottom:0px;">
      <a href="postagens/{{ $manchete->id}}">
        <div class="card-body d-flex justify-content-start">
       <img src="storage/{{ $manchete->image}}"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">{{ $manchete->title }}</h1> 
          <p></p> 
        </div>
      </a>           
  </div>
  @endforeach
  <div class="row ">
    @foreach($noticias as $noticia )
    <div class="col-lg-2 noticia">
             <div class="card">
           <img src="storage/{{ $noticia->image}}" class="card-img-top" alt="escrita2">
           <a href="postagens/{{ $noticia->id }}"> <div class="card-body">
                <h5 class="card-title">{{ $noticia->title }}</h5>
              
       
              </div>
            </a>
            </div>
            
          </div>
       
 

      @endforeach
          @foreach($arts as $artigo)
            <div class="card aside" style="width:25rem ; margin-top:20px;">
              <div class="card-body">
                <h4>Artigo:</h4>  
           <!-- <img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2"> -->
            <a href="artigos/{{ $artigo->id }}" >  <h5 class="card-title">{{ $artigo->title }}</h5>
                <p class="card-text">{{ $artigo->resumo }}</p>
                </div>
              </a>
              </div>
          @endforeach   
    </div>
  <div class="card " style="width:45rem ; margin-bottom:0px;">
      <a href="postagens/{{ $noticia->id }}"><div class="card-body d-flex justify-content-start">
       <img src="/image/escrita2.jpg"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">PedraNews tem Podcast</h1>   
        </div>
      </a>           
  </div>
</div>
</div>
@endsection
