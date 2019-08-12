@extends('layouts.app')

@section('content')
<div class="container mt-1 pt-1">
    <div class="formato-izquierda">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <h1 class="card-header" style="text-align: center;">
                                Proyectos Ejecutados
                            </h1>
                            <div class="card-body">
                                @if(count($proyectos) > 0)
                                @foreach($proyectos as $proyecto)
                                <div class="well">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                <img class="card-img-right flex-auto d-none d-md-block"
                                                    style="width: 200px; height: 250px;"
                                                    src="/img/proyectos/{{$proyecto->imagen}}">
                                                <div class="card-body d-flex flex-column align-items-start">
                                                    <h3 class="mb-0">
                                                        <a class="text-dark"
                                                            href="/proyectos/{{$proyecto->id}}">{{$proyecto->nombre}}</a>
                                                    </h3>
                                                    <p class="card-text mb-auto">{{$proyecto->descripcion}}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{$proyectos->links()}}
                                @else
                                <p>Proyectos no encontrado</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
    </div>
</div>
@endsection