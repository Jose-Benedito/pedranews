@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')

@foreach($arts as $artigo )
  <div class="container col-lg-10 col-sm-4">
  <div class="card">
      <div class="card-body col-lg-10 col-sm-4">
        <h1 class="card-title">{{ $artigo->title }}</h1>     
        <p >{{ $artigo->data_post }}</p> 
        <p>{!! $artigo->description !!}</p> 
      
        <p class="legenda">Por:{{ $artigo->autor }}</p>  
        </div>
                
  </div>
  </div>
@endforeach 

  @endsection