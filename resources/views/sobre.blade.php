@extends('layouts.main')

@section('title', 'BNTH - Sobre')

@section('content')

{{-- Este é o a formar de comentar com Blade --}}

        <h2>{{ $titulo }}</h2>
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
