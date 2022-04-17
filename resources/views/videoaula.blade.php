@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="d-block w-100 mb-5" alt="slide3.jpg">
    <div class="container">
     <div class="row"> 
       @foreach($videos as $video)
       <h4 class="text-left">{{ $video->title }}</h4>
       <p>{{ $video->data_post }}</p>
       <div class="col-lg-8 col-md-4">

            <div class="embed-responsive embed-responsive-16by9 d-flex justify-content-center">
              <iframe class="embed-responsive-item w-100 m-3 " style="height:250px;" src= {{ $video->url }} allowfullscreen></iframe>
            </div>
        </div>
            <div class="col-lg-4 col-md-4 p-4">
            <p class="card  text-left p-3 ">{{ $video->description }}</P>
            </div>
        
          @endforeach
    </div>
  
</div>

@endsection
