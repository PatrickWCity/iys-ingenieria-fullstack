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
                        <div class="entry-title mt-1 pt-1">
                            <h1 style="text-align: center;">UBÍCANOS</h1>
                        </div>
                        <p style="text-align: center;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.8709554620946!2d-70.68520918459603!3d-33.452668405012716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c4f7bc41fef3%3A0x5806b51cf1641ae1!2sJos%C3%A9+Luis+Coo%2C+Santiago%2C+Estaci%C3%B3n+Central%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1sen!2scl!4v1565387202281!5m2!1sen!2scl"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
            </div>
    </div>
    </main>
    <hr>
</div>
</div>
@endsection