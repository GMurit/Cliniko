<?php require_once '../aplicacion/vistas/plantillas/cabecera.php'; //DE NUEVO LLAMO A LA CABECERA PARA QUE CARGUE EN ESTA PÁGINA TAMBIÉN.?>

<!-- SECCIÓN DONDE SE EXPLICA BREVEMENTE QUÉ ES CLÍNIKO-->
<section class="seccion-que-es py-5" style="background-color: #e7e597ff;">
    <div class="contenedor">
        <h1 class="titulo-principal text-center" style="color: #047857;">¿Qué es Clíniko?</h1>
        <p class="descripcion-secundaria mt-3 text-center" style="color: #111111;">
            Clíniko es una aplicación web diseñada para conectar pacientes y profesionales sanitarios de forma rápida y segura. 
            Permite a los pacientes solicitar, modificar o cancelar citas médicas de manera sencilla y consultar sus historiales médicos.
        </p>
        <p class="descripcion-secundaria mt-3 text-center" style="color: #111111;">
            Por otro lado, los médicos pueden gestionar su agenda, recibir notificaciones y valorar la experiencia de los pacientes, 
            facilitando así un seguimiento completo y eficiente.
        </p>
        <p class="descripcion-secundaria mt-3 text-center" style="color: #111111;">
            La plataforma también cuenta con un sistema de notificaciones automáticas por correo electrónico para mantener 
            a todos informados de sus citas y actualizaciones importantes.
        </p>
    </div>
</section>

<!-- DE NUEVO, METO LA SECCIÓN PARA QUE EL USUARIO QUIERA REGISTRARSE -->
<section class="seccion-llamada-accion text-center py-5">
    <div class="contenedor">
        <h2 class="titulo-accion" style="color: #047857;">¡Únete ahora!</h2>
        <p class="descripcion-accion mt-3" style="color: #111111;">
            Regístrate como paciente o médico y empieza a gestionar tus citas de forma eficiente y segura.
        </p>
        <a href="registro.php" class="btn boton-cuadrado mt-3" style="background-color: #047857; color:white;">Registrarse</a>
    </div>
</section>

<?php require_once '../aplicacion/vistas/plantillas/pie.php'; //IGUALMENTE, LLAMO AL PIE DE PÁGINA PARA QUE TAMBIÉN CARGUE EN ESTA PÁGINA?>