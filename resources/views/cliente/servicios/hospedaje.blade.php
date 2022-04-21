@extends('cliente.main')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-4 my-auto">
      <h3 class="mt-5 mt-lg-0">Hospedaje</h3>
      <p class="pe-5">Explora y encuentra hoteles, alojamientos y sus promociones, ofertas, descuentos</p>
      <!-- <a href="javascript:;" class="text-primary icon-move-right">More about us
        <i class="fas fa-arrow-right text-sm ms-1"></i>
      </a> -->
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-search opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Explora el servicio dedicado al hospedaje. <br> Vea las publicaciones sobre servicios de hospedaje .</p>
        </div>
      </div>

      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-eye opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Conoce los negocios dedicados al hospedaje. <br>Vea detalles del negocio que ofrece su servicio.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-phone opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Contáctalos e informate acerca de sus servicios de hospedaje. <br> Interactua con los negocios a traves de sus medios de contacto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 mt-lg-0 mt-5 ps-lg-0 ps-0">
        <div class="container">
            @foreach($hospedajes as $hospedaje)
            <div class="row py-sm-1">
                <div class="col-lg-12 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-gradient text-primary text-3xl">hotel</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5>{{ $hospedaje->title }}</h5>
                        <p>{{ $hospedaje->description }}</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
                            Ver servicio...
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
</div>

@endsection