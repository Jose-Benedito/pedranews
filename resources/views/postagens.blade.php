@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="img-fluid mb-5" alt="slide3.jpg">
    <div class="container md-12">
        <h4 class="text-center">Título do vídeo</h4>
        <div class="embed-responsive embed-responsive-16by9 d-flex justify-content-center">
          <iframe class="embed-responsive-item w-50  " style="height:250px;" src="https://mega.nz/embed/cQkFyICK#yjT1NsWF5VICeEFQ6sSpmTrQZ9lmqa7h_o887lzjIzs" allowfullscreen></iframe>


        </div>
        <p class="text-center">Descrição do vídeo</p>
        <p class=text-center">Postado em 09 Abril de 2022</p>
    </div>
    <div class="row">
        <div class="col-4 ">
             <div class="card" style="width: 18rem; margin-top:20px;">
              <img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
    </div>
        <div class="col-4">
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
@if($id != null)
         <p> Exibindo postagens id: {{ $id }}</p>
    @endif
@endsection
