@extends('layouts.main')

@section('title', 'BNTH - Sobre')

@section('content')

{{-- Este é o a formar de comentar com Blade --}}

        <h2>{{ $titulo }}</h2>

<img src="/image/desktop-sobrenos.jpeg" class="d-block w-100" alt="escrita">

<!-- Postagens -->
<div class="container">
  <div class="row m-5">
  <div class="col-8">
    <img src="/image/foto.jpeg" alt="foto do autor" class="rounded-circle m-5">

    <h6>Por: José Benedito Medeiros</h6>
    <h3>Benethowen</h3>
    <p >Sou professor de Língua Portuguesa graduado em Letras, com pós em linguística e gramática na Universidade Nove de Julho. Atuo na rede de ensino do Estado de São Paulo. Além de portuguẽs, sou licenciado em música pela Faculdade Integrada Cantareira.

  </div>
  <div class="col-4  bg-secondary">
    <h6>Postagens anteriores</h6>
    <a href="#">Postagens 2</a>
    <a href="#">Postagens 3</a>
    <a href="#">Postagens 4</a>
    <a href="#">Postagens 5>
    <a href="#">Postagens 6</a>
    <a href="#">Postagens 7</a>
  </div>
</div>
     {{-- interações com diretivas do Blade --}}
    {{-- usando if, elseif e else --}}
        @if(10 > 5)
            <p>A condição é true</p>
        @endif
        
        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
            <p> O nome é Pedro </p>
        @elseif($nome == "João Carlos")
            <p>O nome é {{$nome}} e ele tem {{ $idade }}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

    {{-- usadoa diretiva for --}}
        @for($i = 0; $i < count($array); $i++)
            <p>{{ $array[$i] }}</p>
        @endfor
    
    {{-- usando o foreach --}}
         @foreach($pessoas as $pessoa)
            <p>{{ $pessoa }}</p>
         @endforeach

    {{-- Pode ser usado o PHP puro com a diretiva para o php do blade --}}
        @php
            $name = "João";
            echo $name;
        @endphp

@endsection
