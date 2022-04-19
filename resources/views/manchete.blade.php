@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')


<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid mb-5" alt="...">

<h2 class="text-center m-5">Postagem de videos</h2>
<div class="col-md-6 offset-md-3">
    
@foreach($noticias as $manchete )
  <div class="container col-lg-10">
  <div class="card" style="width:45rem ; margin-bottom:0px;">
      <a href="noticias/{{ $manchete->id}}"><div class="card-body d-flex justify-content-start">
       <img src="storage/{{ $manchete->image}}"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">{{ $manchete->title }}</h1> 
          <p></p> 
        </div>
      </a>           
  </div>
  @endforeach

@endsection

