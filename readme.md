# Sistema de registro único de medicina tradicional ancestral boliviana - Rumetrab

## [2.0.0] 01.08.2018


### Funcionalidades
- Rediseño de la interfaz de usuario empleando la plantilla de administración [Paper Dashboard 2 for Bootstrap](https://demos.creative-tim.com/paper-dashboard-2/examples/dashboard.html).
- Menú vertical según lo requerido.
- Modulo de gestión de usuarios, con la posibilidad de crear, editar y eliminar.
- Entradas de registro validadas con los atributos `HTML5` correspondientes al tipo de dato.
- Agregar botón [Confirmar con SIGET].
- Validación de sesión iniciada.
- Mostrar o agregar funcionalidades de acuerdo al rol del usuario.
- Campos de entrada para registrar médicos agrupados de acuerdo a la información a introducir.
- Logo creado.
- Rediseño de la sección de selección de idiomas, para hacer la navegación al usuario que registrar médicos un oco menos engorrosa.
- Integración con el plugin [Date Range Picker for Bootstrap](http://www.daterangepicker.com).
- Sección `DATOS DEL REGISTRO SISTEMA` en registrar médicos se muestra solo si el usuario es administrador.
- Se mantiene la busqueda de médicos manejada anteriormente.
- Se dejo sin efecto la página principal.
- Se manejo la adición de las nuevas características con Programación Orientada a Objetos y la autocarga de clases `psr-4` con composer, manteniendo la compatibilidad lo más posible con `PHP 5`.
- No se requiere instalar paquetes adicionales.
- Archivos css minificados.
- Se mantuvo la estructura de carpetas original.
- No se realizaron cambios sustanciales en los archivos antiguos.


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

Ubicación de los archivos.
  ```
  RUMETRB
  .
  └── model/
     ├── class.mysql.php
     ├── conexion.php
     └── database.php
  ```
- Credenciales de acceso por defecto:
  * Usuario: Administrador
  * Contraseña: Admin


## Preguntas frecuentes

**Como manejar los roles?**

1. Si se quiere crear un nuevo rol este deberá hacerse desde la base de datos.
2. Crear una nueva constante `const NUEVO_ROL = id en la base de datos` en el archivo `models\Rol.php`. <br>
Recomendado que lleve el mismo nombre que se le asigno en la base de datos, esto para facilitar su acceso desde los demas archivos.

Ubicación del archivo.
```
RUMETRB
.
└── model/
   └── Rol.php
```
3. Para hacer uso de estos roles para otorgar o quitar el acceso a funcionalidades basta con ir al archivo `view/partials/sidebar.php`, y deberas agregar o quitar bloques de enlaces html que llevan a las diferentes funcionalidades:

Ubicación del archivo.
```
RUMETRB
.
└── view/
    └── partials/
        └── sidebar.php
```

Para conceder acceso a una funcionalidad a usuarios con cierto rol agregar un nuevo bloque de codigo `html` como el que se muestra a continuación en el `case` correspondiente. <br>
Sustituir el contenido de `href` por la url de la funcionalidad a acceder.

Para revocar el acceso, simplemente eliminar.

```html
<li class="">
  <a href="?c=Registro&a=Principal">
    <i class="nc-icon nc-image"></i>
    <p>Dashboard</p>
  </a>
</li>
```

`switch` que se encarga de gestionar los accesos.

```php
/** 
* @param int $rol_id - Identidicador del rol en la base de datos.
*/
switch (\App\Controller\Auth\Auth::user()->sys_rol_id) {
  case \App\Models\Rol::ADMINISTRADOR:
    ...
  break;
  case \App\Models\Rol::USUARIO:
    echo '
      <ul class="nav">
        <li>
          <a href="?c=Registro&a=Crud">
            <i class="nc-icon nc-bold"></i>
            <p>Nuevo registro</p>
          </a>
        </li>
        <li>
          <a href="?c=Registro&a=MT">
            <i class="nc-icon nc-money-coins"></i>
            <p>Listar Médicos</p>
          </a>
        </li>
        <li>
          <a href="?c=Registro&a=cerrar">
            <i class="nc-icon nc-button-power"></i>
            <p>Salir</p>
          </a>
        </li>
      </ul>
    ';
  break;
  case \App\Models\Rol::SUPERVISOR:
  ...
  break;
}
```

Si desea manejar un nuevo rol agregue un nuevo case.
```php
case \App\Models\Rol::NUEVO_ROL:
...
break;
```

Nota:

- Para acceder a los datos del usuario que ha iniciado sesión puede usar:

```php
\App\Controller\Auth\Auth::user()->sys_rol_id
\App\Controller\Auth\Auth::user()->Usuario
```

Los datos disponibles están determinados por los atributos definidos en la clase `models\User.php`.


- Para acceder a los Roles definidos en la clase `models\Rol.php` puede usar:

```php
\App\Models\Rol::ADMINISTRADOR
\App\Models\Rol::USUARIO
\App\Models\Rol::NUEVO_ROL
```

Los datos disponibles están determinados por las constantes definidas en la clase.
