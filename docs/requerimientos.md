
# Sistema de registro único de medicina tradicional ancestral boliviana - Rumetrab

**Premisas principales son:** 
- Afinar la imagen del sistema.
- El menu principal que esta en vertica ponerlo horizontal.
- Poner un modulo de gestión de usuarios segun requerimientos que le voy a pasar a su correo. 
- Validar mis entradas de registro, por tipo de datos


## Modulo de registro
- Validar los campos
- Agregar botón [Confirmar con SIGET]
- Llenar los campos de datos personales con la respuesa de SIGET

## Listado de provincias - NO URGENTE
-Podria ir en el area de reportes

## Listado de municipios - NO URGENTE
-Podria ir en el area de reportes

# Listar medicos

# Usuarios del sistema
- Operador
  Registrar
    Datos del registro Sistema no visible
  Imprimir

- Reporteador
- Ingresar datos - Inscripción
- Reportes

- Administrador
* Configuración del sistema
* Configuración de usuarios
  Nuevo usuario
    Datos del registro Sistema visible
  Lista de usuarios
* Ingreso de datos
* Reportes

No mostrar
Buscar medico
Listar municipio y provincia


-----

# Acceso al Sistema
- Usuario: Administrador
- Contraseña: Admin


# Requerimientos II

- Poner imagenes  en la pantalla de login
- En la INTRODUCCIÓN DATOS EN EL ÁREA DE NUMERO DE DOCUMENTOS, RESTRINGIR EL INGRESO DE TEXTO QUE SOLO SEA NUMÉRICO, BLOQUEANDO TEXTO
- Para el Boton SIGET, debe decir VERIFICAR CON SEGIP, y con procedimientos Json debe ingresar al siguiente URL de prueba que me dieron, al verificar la validez de los datos, los campos se deben autorrellenar
- el formato de fecha debe ser: dd/mm/aa, QUITAR LA OPCION “CUENTA CON CERTIFICADO ORIGINAL”
- SOLO VERIFICAR QUE ACEPTE NUMERO: EN TELEFONO Y CELULAR SOLO NUMEROS
- TOMAR EN CUENTA QUE HAY CASOS EN QUE SI HABLAN, PERO NO ESCRIBEN. TOMARLO EN CUENTA
- LA FECHA en datos de formulario DEBE TENER EL FORMATO DD/MM/AA
- EL ROL USUARIO, SOLO DEBE INGRESAR DATOS, RESTRINGIR LA IMPRESIÓN.
- EL PRIVILEGIO DE SUPERVISOR PUEDE INGRESAR DATOS E IMPRIMIR
- CUANDO QUISE GRABAR DATOS ME SALIÓ ESTE MENSAJE
- En el ROL ADMINISTRADOR, poner en el modulo usuarios, cuanto tiempo estuvo desde inicio de sesión los usuarios, tanto administrador, como supervisor y usuarios, fecha hora de inicio y hora de fin, con fines de auditibilidad



tiempo que duro la sesión
fecha de inicio
fecha de finalización

En la base de datos necesitaria almacenar
id, usuario_id, inicio de sesión, finalización

Almacenar el usuario_id, inicio de sesión al ingresar a la aplicación.
Registrar la finalización.

Mostrar solo el ultimo registro según el usuario.


1. solo el supervisor puede editar el registro, mas no el usuario, el usuario solo registra
2. ambos pueden ver los registros, pero solo el supervisor y el administrador pueden editar para modificar los registros
3. En cuanto el api, no es funcionando mañana me diran si se lo restablecio, y te dare mayor informacion
4. en la impresion de la matricula hay que cambios de forma, por ejemplo no debe decir MATRICULA PROFESIONAL, sino no REGISTRO UNICO, y dos cambios minimos que mañana le enviare, con eso concluiriamos.