@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')

@foreach($noticias as $noticia )
  <div class="container col-lg-10 col-sm-4">
  <div class="card">
      <div class="card-body col-lg-10 col-sm-4">
        <h1 class="card-title">{{ $noticia->title }}</h1> 
        <h4><i>{{ $noticia->subtitle }}</i></h4>
        <p >{{ $noticia->data_post }}</p> 
        <p>{!! $noticia->body !!}</p> 
        <img src="/storage/{{ $noticia->image }}" class="card-img-top view-foto" alt="escrita2">
        <p class="legenda">{{ $noticia->foto_desc }}</p>  
        </div>
                
  </div>
  </div>
@endforeach 

  @endsection