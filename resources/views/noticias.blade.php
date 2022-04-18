@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')


<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid mb-5" alt="...">

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

@endsection

