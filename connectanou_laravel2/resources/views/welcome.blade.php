{{-- héritage de la view layouts/app.blade.php --}}
@extends('layouts.app')

@section('content')

  <div class="container text-center">    
    {{-- @if ($request->session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }} 
        </div>
    @endif --}}
    <div class="row ">
      <div class="col"> <br><br>
      	     <h1>Bienvenue sur Connectanou.re</h1><br><br>
             <!-- Carousel -->
  <div id="carouselExampleControls" style="margin-left:10px" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" style="margin-left:60px" src="{{ asset('img/landing_por.png')}}" alt="image_porteur">
    </div>
    <div class="carousel-item">
      <img class="d-block"  style="margin-left:60px"  src="{{ asset('img/landing_rea.png')}}" alt="image_realisateur">
    </div>
    <div class="carousel-item">
      <img class="d-block" style="margin-left:60px"  src="{{ asset('img/landing_por.png')}}" alt="image_porteur">
    </div>
  </div>
  <!-- Bouton du carousel -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    <!-- Widget Facebook/linkedin -->
      <div class="col"><br><br>
        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6572672813348511745" height="420" width="520" frameborder="0" allowfullscreen="" title="Post intégré"></iframe>
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fconnectanou%2Fposts%2F410836776304501&width=500" width="530" height="420" position="absolute" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </div>
  </div>
  <!-- Indicateur -->
  <div class="text-center">
  	<button type="button" class="btn btn-primary btn-circle btn-xl" style="border-radius:50%;width:120px;height:120px;padding: 10px 16px;font-size: 12px">Projet déposer<br></button> 
  	<button type="button" class="btn btn-primary btn-circle btn-xl" style="border-radius:50%;width:120px;height:120px;padding: 10px 16px;font-size: 12px">Porteur<br></button>
  	<button type="button" class="btn btn-primary btn-circle btn-xl" style="border-radius:50%;width:120px;height:120px;padding: 10px 16px;font-size: 12px"><br>Réalisateur</button>
  </div>
  <!-- Fin indicateur -->
@endsection