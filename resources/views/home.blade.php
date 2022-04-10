<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')


<h2>{{ $titulo }}</h2>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/image/slide1.jpg" class="d-block w-100" alt="slide1">
    </div>
    <div class="carousel-item">
      <img src="/image/slide2.jpg" class="d-block w-100" alt="slide2">
    </div>
    <div class="carousel-item">
      <img src="/image/slide3.jpg" class="d-block w-100" alt="slide3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Postagens -->
<div class="container">
  <div class="row m-5">
  <div class="col-8">
    <img src="/image/foto.jpeg" alt="foto do autor" class="rounded-circle m-5">


  @foreach($artigos as $artigo)
    <h6>Por: José Benedito Medeiros</h6>
    <h3>{{ $artigo->title }}</h3>
    <p>{{ $artigo->description }}</p>
    <p>{{ $artigo->data_post }}
  @endforeach

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

</div>


@endsection
