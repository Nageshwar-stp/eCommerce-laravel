@extends('master')
@section('content')
<div class="custom-product">
   <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            @foreach ($products as $item)
            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$item['id']}}" class="{{$item['id']==1?'active':''}}"></button>
            @endforeach
        </div>
    
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

        @foreach ($products as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">
            <img src="{{$item['gallery']}}" class="d-block w-100 slider-img">
            <div class="carousel-caption slider-text">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
            </div>
        </div>
        @endforeach
        
        </div>
    
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" >
        <span class="carousel-control-next-icon"></span>
        </button>
  </div>
  <div class="trending-wrapper">
      <h3>Trending Products</h3>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($products as $item)
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$item['id']}}" class="active" aria-current="true" aria-label="Slide 1"></button>
          @endforeach

        </div>
        <div class="carousel-inner">
            @foreach ($products as $item)

          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
  </div>
</div>
@endsection