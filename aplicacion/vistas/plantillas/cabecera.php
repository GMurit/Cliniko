<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clíniko</title>

  <!-- DIRECCIÓN PARA ACCEDER A LA FUENTE DE GOOGLE DE POPPINS -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- EL ENLACE PARA EL FUNCIONAMIENTO DE BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- UN ENLACE A UNA HOJA DE ESTILOS CSS PROPIA PARA ESTILOS PERSONALES-->
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body style="font-family: 'Poppins', sans-serif;">
  <!-- BARRA DEL MENÚ PRINCIPAL-->
<nav class="navbar navbar-expand-lg" style="background-color: #111111;">
    <div class="container">
        <a class="navbar-brand text-white" href="index.php">Clíniko</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="que-es-cliniko.php">¿Qué es Clíniko?</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="servicios.php">Servicios</a></li>
              <li class="nav-item">
                <a class="btn boton-cuadrado me-2" style="background-color: #047857; color:white;" href="registro.php">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="btn boton-cuadrado" style="background-color: #047857; color:white;" href="login.php">Iniciar sesión</a>
              </li>
            </ul>
        </div>
    </div>
</nav>