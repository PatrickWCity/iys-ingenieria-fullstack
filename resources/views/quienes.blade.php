@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container mt-1 pt-1">
        <div class="formato-izquierda" style="text-align: center;">
            <h1 class="entry-title" style="text-transform:uppercase; text-align:left;">
                Quiénes somos
            </h1>
            <hr>
            <div class="accordion" id="accordionExample">
                <div class="card" style="margin-bottom: 1rem!important;">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link"
                                data-target="#collapseOne" data-toggle="collapse" type="button">
                                NUESTRA HISTORIA
                            </button>
                        </h2>
                    </div>
                    <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample"
                        id="collapseOne">
                        <div class="card-body">
                            I&amp;S; LTDA. nace en Enero del 2007 cuando un equipo de profesionales de Planta CMPC
                            Papeles Cordillera que culminan ampliación de Máquina Papelera (proyecto PROCOR) deciden
                            independizarse formando una empresa de ingeniería y Montaje.
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 1rem!important;">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button aria-controls="collapseTwo" aria-expanded="false" class="btn btn-link collapsed"
                                data-target="#collapseTwo" data-toggle="collapse" type="button">
                                RUBRO
                            </button>
                        </h2>
                    </div>
                    <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionExample" id="collapseTwo">
                        <div class="card-body">
                            Prestamos servicios en el desarrollo de proyectos, abarcando desde la ingeniería básica y de
                            detalles, hasta la ejecución, incluyendo la Inspección Técnica de Obra.Desarrollamos
                            proyectos de Arquitectura y gestiones de Permisos de Edificación y Recepción Final de
                            Obras.Además, I&amp;S; Ltda. dispone de un suministro de Personal Técnico a modo de contrato
                            mensual (Hora Hombre) o según requerimientos del cliente.
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 1rem!important;">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button aria-controls="collapseThree" aria-expanded="false" class="btn btn-link collapsed"
                                data-target="#collapseThree" data-toggle="collapse" type="button">
                                NUESTRO STAFF
                            </button>
                        </h2>
                    </div>
                    <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionExample"
                        id="collapseThree">
                        <div class="card-body">
                            Contamos con la infraestructura y personal necesario para desarrollar proyectos en diversos
                            rubros de la industria chilena, abarcando las áreas Mecánica (Estructuras y Equipos),
                            Piping, Obras Civiles, Eléctrica, Electro-Control (Automatización) y Aerotermia.Nuestro
                            equipo de profesionales cuenta con la experiencia necesaria para abordar todo tipo de
                            proyectos de pequeña, mediana o gran envergadura . Este equipo está conformado por
                            Ingenieros, Arquitectos, Proyectistas, Supervisores de Terreno, Inspectores Técnicos de
                            Obras, Prevencionistas de Riesgos, Mecánicos de Mantención, Personal de Operaciones,
                            Personal Administrativo, (Eléctricos), entre otros.
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 1rem!important;">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button aria-controls="collapseFour" aria-expanded="false" class="btn btn-link collapsed"
                                data-target="#collapseFour" data-toggle="collapse" type="button">
                                VISIÓN
                            </button>
                        </h2>
                    </div>
                    <div aria-labelledby="headingFour" class="collapse" data-parent="#accordionExample"
                        id="collapseFour">
                        <div class="card-body">
                            Ser una empresa que preste servicios de calidad, desarrollándose de manera confiable,
                            sólida, responsable, innovadora y rentable, con una gestión flexible que se anticipe y
                            adapte a los cambios de este mundo globalizado, con la calidad humana y audacia de nuestra
                            gente, retroalimentándonos e innovando continuamente, para el desarrollo de nuevos negocios.
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 1rem!important;">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button aria-controls="collapseFive" aria-expanded="false" class="btn btn-link collapsed"
                                data-target="#collapseFive" data-toggle="collapse" type="button">
                                MISIÓN
                            </button>
                        </h2>
                    </div>
                    <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionExample"
                        id="collapseFive">
                        <div class="card-body">
                            Nuestra Misión es poner al alcance de nuestros clientes un abanico de soluciones factibles y
                            rentables para la externalización de su departamento de ingeniería de acuerdo a sus
                            necesidades, logrando así una adaptación a las nuevas exigencias del mercado mediante
                            mejoras en la competitividad, entendiendo que el éxito de ambos está íntimamente
                            relacionado. .
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection