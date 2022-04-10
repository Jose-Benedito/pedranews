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

    <h6>Por: José Benedito Medeiros</h6>
    <h3>As variedades linguísticas</h3>
    <p >Já não é novidade que o Brasil está, no mínimo, com alguns séculos de atraso com relação a educação e ainda vai demorar um pouco mais até que a BNCC comece a dar sinais de mudanças do paradigma da educação de base, ainda que haja alguns poucos exemplos aqui e ali de que isto já esteja acontecendo, porém  para a grande parte do sistema público o processo é lento, exige sanar demandas atrasadas tanto de acesso quanto de qualidade, juntamente com qualificação de profissionais nessa área - e já não é de hoje que sofre de total descaso.</p>
<p>
  Trabalho na Educação já algum tempo mas trabalhei vinte e cinco anos na indústria metalúrgica, o tempo para ver seu ápice e sua rápida transformação com os novos componentes tecnológicos  em meio a crises econômicas, as dores de parto no surgimento da economia global.</p>
<p>
O futuro é incerto para quem já trabalhou muito, como os da minha idade e mais incerto ainda quem sonha em começar uma carreira e tocar sua vida. Se de fato já estamos na sociedade do conhecimento, estudar por toda vida é a realidade: descobrir novas habilidades, incorporar novos conhecimentos e não se intimidar em começar uma carreira nova, pois a lógica do mercado sempre foi o lucro, com ou sem as pessoas.</p>
<p>Sábado, 09 de abril de 2022</p>

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
