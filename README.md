# Clíniko

Aplicación web para citas médicas entre pacientes y profesionales sanitarios.

Clíniko es un proyecto desarrollado como parte final del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web (DAW).  
Su objetivo es ofrecer una plataforma digital que facilite la comunicación entre pacientes y médicos, permitiendo gestionar citas médicas, historiales, valoraciones y notificaciones de forma sencilla y segura.


## Estructura del proyecto (Modelo – Vista – Controlador)

La aplicación sigue la estructura de carpetas del MVC (Modelo – Vista – Controlador) para mantener la organización.

Carpetas:
  cliniko/
      aplicacion/
      configuracion/
      controladores/
      modelos/
      vistas/
          paciente/
          medico/
          administrador/
          plantillas/
      publico/
          css/
          js/
          img/
          index.php
          (otras páginas publicas como las páginas informativas de servicios, qué             es cliniko, login, etc.)
      base_datos/
      documentos/
      README.md

## Roles y permisos


El usuario paciente  es el usuario que solicita atención médica y puede solicitar, modificar o cancelar citas o valorar médicos y recibir notificaciones por correo. 
El usuario médico es el usuario que ofrece atención sanitaria y puede gestionar sus citas, consultar historiales y recibir valoraciones.
El usuarioa administrador es el usuario encargaado de mantener el funcionamiento del sistema y puede gestionar usuarios, supervisar valoraciones y la configuración general de la web.



## Funcionalidades clave

Gestión completa de citas médicas (CRUD), sistema de roles, envío de notificaciones por correo electrónico, uso de AJAX en operaciones de recarga de la página, listados con filtros y paginación, validaciones en frontend y backend y un diseño responsive con Bootstrap.



## Tecnologías utilizadas

PHP, mysql con  Mysql Query Browser para la base de datos, HTML5, CSS3 y Bootstrap para el diseño, AJAX con javaScript para la recarga de la página, Xampp para el servidor local, git y github para el repositorio remoto y trello para la planificación de proyecto. 



## Estado del proyecto

El proyecto está en desarrollo.















