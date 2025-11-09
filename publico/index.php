<?php require_once '../aplicacion/vistas/plantillas/cabecera.php'; //EL REQUIRE_ONCE ES PARA QUE CUANDO CARGUE EL INDEX NO CARGUE SIN LA CABECERA.
?> 
<!-- SECCIÓN DONDE MUESTRO EL TÍTULO Y ALGO DE INFORMACIÓN ACERCA DE LA WEB-->
<section class="bienvenida text-center py-5" style="background-color: #c1e264ff;">
    <div class="container">
        <h1 class="display-4" style="color: #047857;">Bienvenido a Clíniko</h1>
        <p class="lead" style="color: #111111;">
            La plataforma que conecta pacientes y médicos de forma rápida, segura y sencilla.
            Gestiona tus citas y historiales médicos desde cualquier lugar. Además, podrás dejarnos que piensas
            sobre la antención.
        </p>
    </div>
</section>

<!-- SECCIÓN BREVE DE ¿QUÉ ES CLINIKO? DE LA PAGINA DE INICIO-->
<section class="seccion-que-es text-center py-5">
    <div class="contenedor">
        <h2 class="titulo-secundario" style="color: #047857;">¿Qué es Clíniko?</h2>
        <p class="descripcion-secundaria mt-3" style="color: #111111;">
            Clíniko es una aplicación web que permite a pacientes solicitar citas médicas de forma fácil y segura, 
            y a los médicos gestionar su agenda y consultas desde cualquier lugar.
        </p>
    </div>
</section>

<!-- SECCIÓN PARA ATRAER AL USUARIO PARA QUE SE REGISTRES-->
<section class="seccion-llamada-accion text-center py-5">
    <div class="contenedor">
        <h2 class="titulo-accion" style="color: #047857;">¡Únete ahora!</h2>
        <p class="descripcion-accion mt-3" style="color: #111111;">
            Regístrate como paciente o médico y comienza a gestionar tus citas de forma sencilla.
        </p>
        <a href="registro.php" class="btn boton-cuadrado mt-3" style="background-color: #047857; color:white;">Registrarse</a>
    </div>
</section>



<?php require_once '../aplicacion/vistas/plantillas/pie.php'; //LO MISMO QUE CON LA CABECERA, PARA QUE CUANDO CARGUE LA PÁGINA NO CARGUE SIN EL PIE DE PÁGINA.?> 