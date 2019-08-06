@extends('layouts.app')

@section('content')
<div class="container mt-1 pt-1">
    <div class="formato-izquierda">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <h1 class="card-header" style="text-align: center;">
                                Contacto
                            </h1>
                            <div class="card-body">
                                {!! Form::open(['action' => 'WelcomeController@contacto','method' => 'post']) !!}
                                <div class="form-group">
                                    {{Form::label('nombre', 'Nombre')}}
                                    {{Form::text('nombre','', ['class'=> 'form-control', 'placeholder'=>'Nombre','required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('appat', 'Apellido Paterno')}}
                                    {{Form::text('appat','', ['class'=> 'form-control', 'placeholder'=>'Apellido Paterno','required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('apmat', 'Apellido Materno')}}
                                    {{Form::text('apmat','', ['class'=> 'form-control', 'placeholder'=>'Apellido Materno'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('direccion', 'Direccion')}}
                                    {{Form::text('direccion','', ['class'=> 'form-control', 'placeholder'=>'Direccion'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('telefono', 'Telefono')}}
                                    {{Form::text('telefono','', ['class'=> 'form-control', 'placeholder'=>'Telefono','required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('email', 'Email')}}
                                    {{Form::text('email','', ['class'=> 'form-control', 'placeholder'=>'Email','required'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('comentario', 'Comentario')}}
                                    {{Form::textarea('comentario', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Comentario','required'])}}
                                </div>
                                {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
                                {!! Form::close() !!}
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