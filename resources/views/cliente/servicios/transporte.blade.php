@extends('cliente.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 my-auto">
      <h3 class="mt-5 mt-lg-0">Transporte</h3>
      <p class="pe-5">Informate acerca de los servicios de transporte y realiza tus viajes con tranquilidad.</p>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-search opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Explora el servicio dedicado al transporte. <br> Vea las publicaciones sobre servicios de transporte .</p>
        </div>
      </div>

      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-clock opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Averigua acerca de los diversos destinos que ofrece cada viaje. <br>Vea los diversos lugares de destino del servicio de transporte.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-clock opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Vea las fechas programadas para el viaje. <br> También informate sobre los diversos horarios de partida del viaje.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-phone opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Contáctalos e informate acerca de sus servicios de trasporte. <br> Interactua con los negocios a traves de sus medios de contacto.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-phone opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">Contáctalos e informate acerca de sus servicios de trasporte. <br> Interactua con los negocios a traves de sus medios de contacto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 mt-lg-0 mt-5 ps-lg-0 ps-0">
        <div class="container">
            @foreach($transportes as $transporte)
            <div class="row py-sm-1">
                <div class="col-lg-12 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
                        <i class="material-icons text-gradient text-primary text-3xl">hotel</i>
                        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5>{{ $transporte->title }}</h5>
                        <p>{{ $transporte->description }}</p>
                        <a href="{{ route('cliente.servicio.transporte') }}" class="text-primary icon-move-right">
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