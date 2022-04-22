@extends('layouts.main')

@section('title', 'BNTH - Sobre')

@section('content')

{{-- Este é o a formar de comentar com Blade --}}


<div class="container col-lg-10 col-sm-4">
    
    <img src="/image/desktop-sobrenos.jpeg" class="d-block w-100" alt="escrita">

<!-- Postagens -->
    <img src="/image/foto.jpeg" alt="foto do autor" class="rounded-circle m-5">
  <div class="row">
  <div class="col-lg-12 col-md-4">

    <h6>Por: José Benedito Medeiros</h6>
    <h3>Benethowen</h3>
    <p>PedraNews é uma iniciativa de professores da escola E.E.Jardim Pedra Branca
        como estratégia pedagógica para desenvolver e envolver os alunos na produção escrita,
        assim como outras habilidades adjacentes a essa atividade, como leitura, pesquisa, organização, 
        colaboração e outras mais, necessárias para ler a realidade dos fatos
        que os rodeiam e como são impactadados, absorvidos e resolvidos 
        enquanto caminham em meio ao seu próprio processo de apredizado e
        desenvolvimento da cidadania.
    </p>
    <p>Além de criar oportunidades para lidar com melhor destreza o suporte 
        digital a qual a maioria dos textos circulam atualmente.
    </p>

  </div>
  <div class="col-12 col-md-4 bg-secondary">
    <h6>Postagens anteriores</h6>
    <a href="#">Postagens 2</a>
    <a href="#">Postagens 3</a>
    <a href="#">Postagens 4</a>
    <a href="#">Postagens 5>
    <a href="#">Postagens 6</a>
    <a href="#">Postagens 7</a>
  </div>
</div>
</div>
 <!--    {{-- interações com diretivas do Blade --}}
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
-->
@endsection
