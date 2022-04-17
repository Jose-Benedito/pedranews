<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')





<!-- Postagens -->

  
<!--    <img src="/image/foto.jpeg" alt="foto do autor" class="rounded-circle m-5">
<div class="row">
  <div class="col-lg-8 col-md-4">
    @foreach($artigos as $artigo)
    <h5>Por: José Benedito Medeiros</h5>
    <h3>{{ $artigo->title }}</h3>
    
    {!! $artigo->description !!}
    
    <p>{{ $artigo->data_post }}</p>
    @endforeach
    
    
    
    {!!$artigos->links()!!}
  </div>
</div> -->

  <div class="container col-lg-10">
  <div class="card " style="width:45rem ; margin-bottom:0px;">
      <a href=""><div class="card-body d-flex justify-content-start">
       <img src="/image/escrita2.jpg"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">7° Série fooorkkemmem jhsggabbbbs nnhe</h1>   
        </div>
      </a>           
  </div>
  @for($i=0;$i< 3;$i++)

    <div class="row ">
        <div class="col-lg-2 noticia">
             <div class="card">
             <a href="#" >  <img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
              <div class="card-body">
                <h5 class="card-title">7° Série</h5>
                <p class="card-text">Algumas videoaulas gravadas sobre a apostila Aprender Sempre,
                   para complementar os estudos destinados as turmas da 7° série.</p>
               
              </div>
            </a>
            </div>
            
          </div>

          <div class="col-lg-2 noticia">
          <div class="card ">
           <a href="#" ><img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
              <div class="card-body">
                <h5 class="card-title">7° Série</h5>
                <p class="card-text">Algumas videoaulas gravadas sobre a apostila Aprender Sempre,
                   para complementar os estudos destinados as turmas da 7° série.</p>
                
              </div>
            </a>
          </div>
            
          </div>
          <div class="col-lg-2 noticia">
             <div class="card ">
             <a href="#" ><img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
              <div class="card-body">
                <h5 class="card-title">7° Série</h5>
                <p class="card-text">Algumas videoaulas gravadas sobre a apostila Aprender Sempre,
                   para complementar os estudos destinados as turmas da 7° série.</p>
          
              </div>
             </a>
            </div>
            
          </div>
 

          
            <div class="card aside" style="width:25rem ; margin-top:20px;">
              <div class="card-body">
              <a href="#" ><img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
                <h5 class="card-title">7° Série</h5>
                <p class="card-text">Algumas videoaulas gravadas sobre a apostila Aprender Sempre,
                  para complementar os estudos destinados as turmas da 7° série.</p>
                  
                </div>
              </a>
              </div>
              
    </div>
  @endfor
  <div class="card " style="width:45rem ; margin-bottom:0px;">
      <a href=""><div class="card-body d-flex justify-content-start">
       <img src="/image/escrita2.jpg"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">7° Série fooorkkemmem jhsggabbbbs nnhe</h1>   
        </div>
      </a>           
  </div>
</div>
</div>
@endsection
