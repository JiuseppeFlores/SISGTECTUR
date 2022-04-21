@extends('cliente.main')

@section('content')

<div class="container">
  
  <div class="row">
    <div class="col-lg-4">
      <section class="" id="download-soft-ui">
        <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
          <!-- <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2"> -->
          <div class="container py-6 postion-relative z-index-2 position-relative">
            <div class="row">
              <div class="col-md-7 mx-auto text-center">
                <h3 class="text-white mb-0">Publicaciones</h3>
                <h6 class="text-white">Hospedaje, transporte, gastronomía y atractivos turísticos </h6>
                <p class="text-white mb-5">
                  Encuentra las publicaciones recientes sobre servicios disponibles.
                </p>
                <!-- <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Listado de Publicaciones -->
    <div class="col-lg-8">
      <div class="container">
        
          @foreach ($publicaciones as $publicacion)
          <div class="row py-sm-1">
            <div class="col-lg-12">
              <div class="info-horizontal bg-gradient-light border-radius-xl d-block d-md-flex p-4">
                <img src="{{ asset('img/turismo.png') }}" class="img col-lg-2"/>
                <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                  <h5 class="text-primary">{{ $publicacion->title }}</h5>
                  <p class="">{{ $publicacion->description }}</p>
                  <a href="#" class="text-info icon-move-right">
                    Ver mas...
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

      </div>

      <div class="card-footer ml">
        {{ $publicaciones->links() }}
      </div>
     
    </div>
    
  </div>
</div>
@endsection