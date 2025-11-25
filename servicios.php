<?php require_once 'aplicacion/vistas/plantillas/cabecera.php'; //IGUAL QUE CON EL INDEX.PHP, PARA QUE ESTA PÁGINA NO CARGUE SIN LA CABECERA. ?> 

<!-- SECCIÓN DEL ENLANCE DE SERVICIOS DEL MENÚ PRINCIPAL-->
<section class="seccion-servicios py-5" style="background-color: #e7e597ff;">
    <div class="contenedor">
        <h1 class="titulo-principal text-center" style="color: #047857;">Nuestros Servicios</h1>
        <p class="descripcion-secundaria text-center mt-3" style="color: #111111;">
            En Clíniko ofrecemos servicios que pacientes y médicos se encuentren.
        </p>

        <div class="row mt-5">
            <!-- INFORMAICÓN ACERCA DE CITAS -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center" style = "background-color: lightgreen">
                    <div class="card-body">
                        <h5 class="card-titulo" style="color: #047857;">Gestión de citas</h5>
                        <p class="card-text">
                            ¡Solicita, modifica o cancela tus citas médicas!
                        </p>
                    </div>
                </div>
            </div>
            <!-- INFORMACIÓN ACERCA DE HISTORIALES MÉDICOS-->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center" style = "background-color: lightgreen">
                    <div class="card-body">
                        <h5 class="card-titulo" style="color: #047857;">Historiales médicos</h5>
                        <p class="card-text">
                            ¡Consulta historiales médicos!
                        </p>
                    </div>
                </div>
            </div>
            <!-- INFORMACIÓN ACERCA DEL CORREO-->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center" style = "background-color: lightgreen">
                    <div class="card-body">
                        <h5 class="card-titulo" style="color: #047857;">Notificaciones por correo</h5>
                        <p class="card-text">
                            ¡Recibe avisos importantes directamente en tu correo!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'aplicacion/vistas/plantillas/pie.php'; //IGUAL QUE CON EL INDEX.PHP, PARA QUE ESTA PÁGINA NO CARGUE SIN EL PIE DE PÁGINA.?>