<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')





<!-- Postagens -->

@foreach($manchetes as $manchete )
  <div class="container col-lg-10">
  <div class="card" style="width:45rem ; margin-bottom:0px;">
      <a href="noticia/{{ $manchete->id}}"><div class="card-body d-flex justify-content-start">
       <img src="storage/{{ $manchete->image}}"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">{{ $manchete->title }}</h1> 
          <p></p> 
        </div>
      </a>           
  </div>
  @endforeach
  <div class="row ">
    @foreach($noticias as $noticia )
    <div class="col-lg-2 noticia">
             <div class="card">
           <img src="storage/{{ $noticia->image}}" class="card-img-top" alt="escrita2">
           <a href="/noticia"> <div class="card-body">
                <h5 class="card-title">{{ $noticia->title }}</h5>
              
       
              </div>
            </a>
            </div>
            
          </div>
       
 

          @endforeach
          
            <div class="card aside" style="width:25rem ; margin-top:20px;">
              <div class="card-body">
              <a href="sobre" ><img src="/image/escrita2.jpg" class="card-img-top" alt="escrita2">
                <h5 class="card-title">7° Série</h5>
                <p class="card-text">Algumas videoaulas gravadas sobre a apostila Aprender Sempre,
                  para complementar os estudos destinados as turmas da 7° série.</p>
                  
                </div>
              </a>
              </div>
              
    </div>
  <div class="card " style="width:45rem ; margin-bottom:0px;">
      <a href="noticias"><div class="card-body d-flex justify-content-start">
       <img src="/image/escrita2.jpg"  style="width:250px ; margin:20px;" class="card-img-top" alt="escrita2">
          <h1 class="card-title">7° Série fooorkkemmem jhsggabbbbs nnhe</h1>   
        </div>
      </a>           
  </div>
</div>
</div>
@endsection
