@extends('layouts.app')

@section('content')
<div class="container mt-1 pt-1">
    <div class="formato-izquierda" style="text-align: center;">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <h1 class="card-header">
                                Contacto
                            </h1>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input name="_token" type="hidden" value="z8cCdwhW8YGnCE2NKIng7cfQZUuXJ8e6pmuPGwbU">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label text-md-right" for="nombre">
                                            Nombre y Apellido.
                                        </label>
                                        <div class="col-md-6">
                                            <input autofocus="" class="form-control" id="nombre" name="nombre"
                                                required="" type="text" value="">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right" for="correo">
                                            Email.
                                        </label>
                                        <div class="col-md-6">
                                            <input class="form-control" id="correo" name="password" required=""
                                                type="Email">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button class="btn btn-primary" type="submit">
                                                enviar
                                            </button>
                                        </div>
                                    </div>

                                </form>
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