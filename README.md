# 🩺 Clíniko
**Aplicación web para citas médicas entre pacientes y profesionales sanitarios.**

Clíniko es un proyecto desarrollado como parte final del **Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web (DAW)**.  
Su objetivo es ofrecer una plataforma digital que facilite la **comunicación entre pacientes y médicos**, permitiendo gestionar citas médicas, historiales, valoraciones y notificaciones de forma sencilla y segura.

---

## 🧱 Estructura del proyecto (Modelo – Vista – Controlador)

La aplicación sigue el patrón **MVC (Modelo – Vista – Controlador)** para mantener una arquitectura organizada, escalable y fácil de mantener.

cliniko/
│
├── aplicacion/ # Toda la lógica en relación al funcionamiento de la aplicación web.
│ ├── configuracion/ # Configuraciones globales y constantes (ej. conexión a la base de datos).
│ ├── controladores/ # Se incluirá aquí la lógica de la web, la que seguirán los modelos.
│ ├── modelos/ # Aquí va cada una de las entidades de la base de datos.
│ └── vistas/ # Interfaces (HTML, Bootstrap).
│ ├── paciente/ # Vistas del paciente.
│ ├── medico/ # Vistas del médico.
│ ├── administrador/ # Vistas del administrador.
│ └── plantillas/ # Cabecera, pie, menús comunes para cada página.
│
├── publico/ # Carpeta accesible desde el navegador
│ ├── css/ # Hojas de estilo de la web.
│ ├── js/ # Scripts de JavaScript y AJAX.
│ ├── img/ # Imágenes que vayan a usarse.
│ └── index.php # Aún no se ha creado.
│
├── base_datos/ # Se incluye aquí el script SQL del proyecto (cliniko.sql)
│
├── documentos/ # Documentación del proyecto, diagramas, tareas, etc.
│
├── README.md # Información detallada del proyecto.
└── .gitignore # Archivos que se ha tenido que usar para poder subir las carpetas vacías.

## 👥 Roles y permisos

| Rol | Descripción | Permisos principales |
|-----|--------------|----------------------|
| **Paciente** | Usuario que solicita atención médica. | Solicitar, modificar o cancelar citas; valorar médicos; recibir notificaciones por correo. |
| **Médico** | Profesional que ofrece atención sanitaria. | Gestionar citas, consultar historiales, recibir valoraciones, establecer disponibilidad. |
| **Administrador** | Responsable del sistema. | Gestionar usuarios, supervisar valoraciones, controlar correos y configuración general. |

---

## ⚙️ Funcionalidades clave

- Gestión completa de **citas médicas (CRUD)**.  
- Sistema de **roles y permisos diferenciados**.  
- Envío de **notificaciones automáticas por correo electrónico**.  
- Uso de **AJAX** en procesos interactivos (validación de disponibilidad, carga dinámica).  
- **Listados con filtros y paginación**.  
- **Validaciones en frontend y backend**.  
- Diseño **responsive** mediante Bootstrap.

---

## 💾 Tecnologías utilizadas

- **PHP** (backend y lógica de negocio)  
- **MySQL** con  **MySQL Query Browser** (gestor de base de datos)  
- **HTML5, CSS3 y Bootstrap** (interfaz de usuario)  
- **AJAX / JavaScript** (interactividad y UX)  
- **XAMPP** (entorno de desarrollo local)  
- **Git y GitHub** (control de versiones y repositorio)  
- **Trello** (seguimiento de tareas y metodología ágil)

---

## 🧩 Estado del proyecto

🔹 **Fase actual:** Estructura base y documentación inicial completadas.  
🔹 **Próximas fases:**  
- Implementación de la base de datos.  
- Desarrollo de controladores y modelos.  
- Creación de las vistas dinámicas.  
- Pruebas funcionales y despliegue local.

---

## 📬 Autor

**F.J Muriel Orta**
📚 *Proyecto final del módulo de Desarrollo de Aplicaciones Web (DAW)*  
📅 Curso académico 2025 – 2026
