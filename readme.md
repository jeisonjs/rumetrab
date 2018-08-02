# Sistema de registro único de medicina tradicional ancestral boliviana - Rumetrab

## [2.0.0] 01.08.2018


### Funcionalidades
- Rediseño de la interfaz de usuario empleando la plantilla de administración [Paper Dashboard 2 for Bootstrap](https://demos.creative-tim.com/paper-dashboard-2/examples/dashboard.html).
- Menú vertical según lo requerido.
- Modulo de gestión de usuarios, con la posibilidad de crear, editar y eliminar.
- Entradas de registro validadas con los atributos `HTML5` correspondientes al tipo de dato.
- Agregar botón [Confirmar con SIGET].
- Validación de sessión iniciada.
- Mostrar o agregar funcionalidades de acuerdo al rol del usuario.
- Campos de entrada para registrar médicos agrupados de acuerdo a la información a introducir.
- Logo creado.
- Rediseño de la sección de selección de idiomas, para hacer la navegación al usuario que registrar médicos un oco menos engorrosa.
- Integración con el plugin [Date Range Picker for Bootstrap](http://www.daterangepicker.com).
- Sección `DATOS DEL REGISTRO SISTEMA` en registrar médicos se muestra solo si el usuario es administrador.
- Se mantiene la busqueda de médicos manejada anteriormente.
- Se dejo sin efecto la página principal.
- Se manejo la adición de las nuevas caracteristicas con Programación Orientada a Objetos y la autocarga de clases `psr-4` con composer, manteniendo la compatibilidad lo más posible con `PHP 5`.
- No se requiere instalar paquetes adicionales.
- Archivos css minificados.
- Se mantuvo la estructura de carpetas original.
- No se realizarón cambios sustanciales en los archivos antiguos.


### Que archivos nuevos se añadieron?

```
RUMETRB
.
├── assets
│   └── v2/
│       ├── css/
│       │   ├── styles.css
│       │   ├── styles.css.map
│       ├── fonts/
│       │   ├── fontawesome/
│       │   ├── nucleo-icons/
│       ├── img/
│       │   ├── apple-icon.png
│       │   ├── min-salud.png
│       │   └── min-salud.svg
│       ├── js/
│       │   └── core/
│       │   │   ├── bootstrap.min.js
│       │   │   ├── jquery.min.js
│       │   │   └── popper.min.js
│       │   └── plugins/
│       │   │   ├── daterangepicker.min.js
│       │   │   └── moment.min.js
│       │   ├── paper-dashboard.min.js
│       │   └── paper-dashboard.js.map
│       └── scss/
│           ├── bootstrap.min.scss
│           ├── daterangepicker.scss
│           ├── paper-dashboard.scss
│           ├── styles.scss
│           ├── styles.css.map
│           └── styles.css
│
├── controller/
│   ├── v2/
│   │   └── Auth.php
│   ├── UserController.php
│   └── RolController.php
│
├── docs/
│   ├── 31-07-2018-sys_rol.sql
│   ├── 2018-07-31-sys_usuario.sql
│   ├── rumetra.sql
│   ├── requerimientos.md
│   └── rumetra.png
│
├── model/
│   ├── dao/
│   |   ├── Rol.php
│   |   └── User.php
│   ├── Rol.php
│   └── User.php
│
├── vendor/
│
├── view/
│   ├── auth/
│   |   └── login.php
│   ├── medics/
│   |   ├── create.php
│   |   ├── edit.php
│   |   └── inde.php
│   ├── partials/
│   |   ├── footer.php
│   |   ├── head.php
│   |   ├── navbar.php
│   |   ├── scripts.php
│   |   └── sidebar.php
│   └── users/
│       ├── edit.php
│       └── index.php
├── composer.json
└── readme.md
```

## Como iniciar
- Descargar el zip del proyecto.
- Ejecutar el archivo `rumetra.sql` para crear la base de datos e ingresar los registros.
- Ejecutar a continuación los archivos `31-07-2018-sys_rol.sql` y `2018-07-31-sys_usuario.sql` que contienen las modificaciones correspondientes a esta actualización del sistema.
- Configurar las credenciales de acceso a la base de datos en los diferentes archivos:
  ```
  RUMETRB 2
  .
  ├── model/
     ├── class.mysql.php
     ├── conexion.php
     └── database.php
  ```
- Credenciales de acceso por defecto:
  * Usuario: Administrador
  * Contraseña: Admin
