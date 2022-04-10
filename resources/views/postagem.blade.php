@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')


<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid" alt="...">
@if($busca != '')
    <p>O Usuário está buscando por: {{ $busca }}</p>
@endif
@endsection
