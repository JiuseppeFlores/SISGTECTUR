@extends('cliente.main', ['activePage' => 'dashboard'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
      <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url( {{ asset('cliente/img/bg-sis.jpg') }} )">
          <span class="mask bg-gradient-secondary opacity-4"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-7 text-center mx-auto">
                <h1 class="text-white pt-3 mt-n5" style="text-shadow: 4px 4px 4px black;">SISGTECTUR</h1>
                <p class="lead text-white mt-3" style="text-shadow: 2px 2px 2px black;">Disfruta de la Experiencia Turística a través de un Ecosistema Digital. <br/> Visualiza diferentes servicios: Hospedaje, Transporte, Gastronomia, Lugares Turísticos.</p>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="pt-3 pb-4" id="count-stats">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto py-3">
                <div class="row">
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-primary"><span id="state1" countTo="70">S</span>+</h1>
                      <h5 class="mt-3">Servicios</h5>
                      <p class="text-sm font-weight-normal">Explora los servicios disponibles dentro de la plataforma y descubre uno que se acomode a tus necesidades.</p>
                    </div>
                    <hr class="vertical dark">
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-primary"><span id="state2" countTo="15">P</span>+</h1>
                      <h5 class="mt-3">Publicaciones</h5>
                      <p class="text-sm font-weight-normal">Explora las publicaciones recientes de servicios de los diferentes negocios de turismo.</p>
                    </div>
                    <hr class="vertical dark">
                  </div>
                  <div class="col-md-4">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-primary" id="state3" countTo="4">N</h1>
                      <h5 class="mt-3">Negocios</h5>
                      <p class="text-sm font-weight-normal">Conoce y explora los negocios turísticos que van publicando un servicio cada momento.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection