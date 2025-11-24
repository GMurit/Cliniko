# Clíniko

Aplicación web para citas médicas entre pacientes y profesionales sanitarios.

Clíniko es un proyecto desarrollado como parte final del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web (DAW).  
Su objetivo es ofrecer una plataforma digital que facilite la comunicación entre pacientes y médicos, permitiendo gestionar citas médicas, historiales, valoraciones y notificaciones de forma sencilla y segura.

---

## Estructura del proyecto (Modelo – Vista – Controlador)

La aplicación sigue el patrón MVC (Modelo – Vista – Controlador) para mantener una arquitectura organizada, escalable y fácil de mantener.
---
cliniko/
├── aplicacion/                # Toda la lógica en relación al funcionamiento de la aplicación web.
│   ├── configuracion/         # Configuraciones globales y constantes (ej. conexión a la base de datos).
│   ├── controladores/         # Lógica de la web que seguirán los modelos.
│   ├── modelos/               # Aquí va cada una de las entidades de la base de datos.
│   └── vistas/                # Interfaces (HTML, Bootstrap).
│       ├── paciente/          # Vistas del paciente.
│       ├── medico/            # Vistas del médico.
│       ├── administrador/     # Vistas del administrador.
│       └── plantillas/        # Cabecera, pie, menús comunes.
├── publico/                   # Carpeta accesible desde el navegador
│   ├── css/                   # Hojas de estilo de la web.
│   ├── js/                    # Scripts de JavaScript y AJAX.
│   ├── img/                   # Imágenes que se vayan a usar.
│   └── index.php              # Aún no se ha creado.
├── base_datos/                # Script SQL del proyecto (cliniko.sql)
├── documentos/                # Documentación, diagramas, tareas, etc.
├── README.md                  # Información detallada del proyecto.
└── .gitignore                 # Archivos necesarios para subir carpetas vacías
```
---
## Roles y permisos


Paciente -> Usuario que solicita atención médica -> Solicitar, modificar o cancelar citas; valorar médicos; recibir notificaciones por correo. 
Médico -> Profesional que ofrece atención sanitaria -> Gestionar citas, consultar historiales, recibir valoraciones, establecer disponibilidad. 
Administrador -> Responsable del sistema -> Gestionar usuarios, supervisar valoraciones, controlar correos y configuración general. 



## Funcionalidades clave

Gestión completa de citas médicas (CRUD), sistema de roles y permisos diferenciados, envío de notificaciones automáticas por correo electrónico, uso de AJAX en procesos de carga de página, listados con filtros y paginación, validaciones en frontend y backend y diseño responsive mediante Bootstrap.



## Tecnologías utilizadas

PHP, MySQL con  MySQL Query Browser para la base de datos, HTML5, CSS3 y Bootstrap, AJAX en javaScript, Xampp, Git con GitHub y trello



## Estado del proyecto

El proyecto se encuentra en desarrollo aún.















