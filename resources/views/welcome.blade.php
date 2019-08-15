@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/slide-1.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/slide-2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/slide-3.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<main class="py-4">
  <div class="container mt-1 pt-1">
    <div class="formato-izquierda" style="text-align: center;">
      <h1 class="entry-title" style="text-transform:uppercase; text-align:left;">
        INICIO
      </h1>
      <p>
        ¿Tiene un negocio innovador en mente y no encuentra el equipo que necesita, o es muy costoso?... ¡CONTÁCTENOS!
      </p>
      <p>
        Externalice su departamento de Ingeniería. Deje su empresa en manos expertas y responsables que se dedicarán a encontrar la mejor solución a sus proyectos, proporcionando un servicio integral y del más alto nivel. En INGENIERÍA Y SUPERVISIÓN TÉCNICA LIMITADA (I&S LTDA.), nos comprometemos a proyectar, licitar, fabricar, implementar y supervisar sus ideas, con el fin de mejorar su productividad y al mismo tiempo atenerse a las normas vigentes medioambientales y de seguridad e higiene.
      </p>
      <p>
        El proceso de globalización económico demanda que tanto las empresas emergentes como las consolidadas redefinan sus estrategias competitivas y sus procesos productivos, con la finalidad de lograr un eficiente uso de sus recursos y aumento de su productividad, de modo que se generen ventajas comparativas y así competir con éxito en el mercado. Para ello I&S LTDA. ofrece la más amplia gama de servicios para estar a la altura de estos nuevos retos de aumento en tecnología y modernización que se ve afectado el mundo actual.
      </p>
      <hr>
    </div>
  </div>
</main>
@endsection