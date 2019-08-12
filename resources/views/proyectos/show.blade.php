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
                                {{$proyecto->nombre}}
                            </h1>
                            <div class="card-body">
                                <img style="width:100%" src="/img/proyectos/{{$proyecto->imagen}}">
                                <br><br>
                                <div>
                                    {!!$proyecto->descripcion!!}
                                </div>
                                <hr>
                                @if(!Auth::guest())
                                <a href="/proyectos/{{$proyecto->id}}/edit" class="btn btn-primary">Editar</a>
                                {!!Form::open(['action' => ['ProyectoController@destroy', $proyecto->id], 'method' =>
                                'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                @endif
                                <a href="/proyectos" class="btn btn-secondary">volver</a>
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