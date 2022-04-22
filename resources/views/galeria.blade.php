@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')
<div class="container col-lg-10 col-sm-4">
<div class="row">

        @for($i=0; $i< 14; $i++)

        <div class="col-lg-3 w-50 ">
            <figure class="figure">
            <img src="/image/slide1.jpg" style="height: 200px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
        </div>
        @endfor
</div>
</div>

@endsection