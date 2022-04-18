@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')
<div class="container col-lg-10 col-sm-4">

<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid mb-5" alt="...">
@if($busca != '')
    <p>O Usuário está buscando por: {{ $busca }}</p>
@endif
<div class="col-md-6 offset-md-3">
<form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da notícia">

    </div>
    <div class="form-group">
        <label for="subtitle">Subtítulo:</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtítulo da notícia">

    </div>
    <div class="form-group">
        <label for="body">Texto:</label>
        <textarea type="text" class="form-control corpo" id="body" name="body" placeholder="Corpo da notícia"></textarea>
        
    </div>
    <div class="form-group">
        <label for="image">Fotorreportagem:</label>
        <input type="file" class="form-control" id="image" name="image" >
        
    </div>
    <div class="form-group">
        <label for="foto_desc">Legenda da foto:</label>
        <input type="text" class="form-control" id="foto_desc" name="foto_desc" placeholder="Legenda  da reportagem">
        
    </div>
    <div class="form-group">
        <label for="data_post">Data do postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Criar post">

</form>
</div>
<h2 class="text-center m-5">Postagem de videos</h2>
<div class="col-md-6 offset-md-3">
<form action="/videos" method="POST">
    @csrf 
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do artigo">

    </div>
    <div class="form-group">
        <label for="url">Url:</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="Url do video">

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control" id="description" name="description" placeholder="Texto do artigo"></textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Criar post">

</form>
</div>
</div>
@endsection

