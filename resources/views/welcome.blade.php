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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat mauris ac lacus congue sagittis eget at nunc. Fusce pulvinar libero ut efficitur fermentum. Nullam ante tortor, lacinia id hendrerit a, molestie non neque. Mauris placerat ut erat ac vestibulum. Nam a erat risus. Nunc varius bibendum nibh in varius. Suspendisse nec tortor sagittis metus consectetur bibendum sed in orci. Phasellus sem nibh, cursus in tortor sit amet, placerat sollicitudin est. Nunc molestie elementum elit a tincidunt. Fusce tempus tristique erat at cursus. Aenean sagittis sit amet mauris vitae pretium. Aenean quis mauris ut justo condimentum vehicula. Sed eleifend ex volutpat est elementum posuere. Pellentesque enim metus, bibendum vehicula tortor ut, iaculis pretium elit. Integer nec diam nec sem hendrerit ornare id quis elit. Ut lacinia euismod ligula commodo tristique.Aliquam eget sapien ac ex cursus dignissim. Quisque massa orci, vehicula a egestas eget, vehicula vel mi. Nunc tempor sit amet ante sed elementum. Donec vitae elit at arcu vestibulum aliquam. Maecenas consectetur leo non ex lobortis imperdiet. Pellentesque a dui eu risus convallis commodo. Suspendisse scelerisque turpis in lobortis posuere. Phasellus a sagittis ipsum, nec sagittis metus. In mollis, mauris vel cursus porta, nibh risus consectetur nulla, non tincidunt sem nisl vitae nisl.Maecenas laoreet elit nec quam venenatis dapibus. Duis ultricies venenatis metus, sit amet sollicitudin dui ornare vel. Vivamus non dolor orci. Sed volutpat dui in purus eleifend vestibulum. Quisque lobortis ac risus id ornare. Donec placerat mi sem, nec imperdiet enim tempor nec. Vivamus molestie cursus ligula eget viverra. Donec nunc sem, finibus ac ultrices vel, gravida sed turpis. Cras in nulla eleifend, aliquet ligula ac, dapibus ipsum. Proin tempus nibh vitae orci facilisis ullamcorper. Cras ac nibh non nunc consequat elementum. Aliquam et rutrum ex. Ut condimentum metus sed tristique finibus.
      </p>
      <hr>
    </div>
  </div>
</main>
@endsection