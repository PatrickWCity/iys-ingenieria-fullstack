@extends('layouts.app')

@section('content')
<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Bienvenido!

                    <div class="card bg-primary" style="text-align:center;">
                            <div class="card-header">
                                Mantenedor de Proyectos
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Cantidad de Proyectos</h5>
                            <h6 class="card-text">{{$data}}</h6>
                              <a href="/proyectos" class="btn btn-primary">Ver Listado de Proyectos</a>
                            </div>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection