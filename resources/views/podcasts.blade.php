@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
<div class="container col-lg-10 col-sm-4">
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="d-block w-100 mb-5" alt="slide3.jpg">
    <div class="container">
     <div class="row"> 
     
       <h2 class="text-left">{{ $videos }}</h2>
       <h3>Compositor:{{ $autor }}</h3>
       <div class="col-lg-8 col-md-4">

          <audio autoplay controls>
            <source src="/media/modal01.mp3"  type="audio/mpeg">
         
          </audio>
          <p>Postado: {{ $data }}</p>
      </div>
        
        
    </div>
  
</div>
</div>
@endsection
