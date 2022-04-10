@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="img-fluid mb-5" alt="slide3.jpg">
    <div class="container md-12">
      @foreach($videos as $video)
        <h4 class="text-left">{{ $video->title }}</h4>
        <p>{{ $video->data_post }}</p>
        <div class="embed-responsive embed-responsive-16by9 d-flex justify-content-center">
          <iframe class="embed-responsive-item w-50 m-3 col-8" style="height:250px;" src= {{ $video->url }} allowfullscreen></iframe>

          <p class="card col-3 text-left p-3">{{ $video->description }}</P>
        </div>
        
    </div>
    @endforeach
    <div class="row">
        <div class="col-4">
             <div class="card " style="width: 18rem; margin-top:20px;">
              <img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
    </div>
        <div class="col-4 ">
             <div class="card" style="width: 18rem; margin-top:20px;">
              <img src="/image/escrita1.jpg" class="card-img-top" alt="escrita1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> 
        </div>
        <div class="col-4 ">
             <div class="card" style="width: 18rem; margin-top:20px;">
              <img src="/image/escrita3.jpg" class="card-img-top" style="height:175px;" alt="escrita3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> 
        </div>
</div>

@endsection
