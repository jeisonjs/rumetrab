<?php include_once __DIR__ . '/../partials/head.php'; ?>

<body>
  <div class="wrapper ">
    <?php include_once __DIR__ . '/../partials/sidebar.php'; ?>
    <div class="main-panel">
      <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Registro de Médico Tradicional</h5>
                <p class="card-category">
                  Nuevo Registro de Médico Tradicional
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <form id="frm-Registro" action="?c=Registro&a=Guardar" method="post" 
                    data-toggle="validffator" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input type="hidden" name="Seq_Registro" value="0" />

                      <!-- Sección: Ubicación -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Ubicación
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="CboDepartamento">Departamento:</label>
                              <select id="CboDepartamento" name="Departamento_Seq" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione Departamento...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="CboProvincia">Provincia:</label>
                              <select id="CboProvincia" name="Provincia_Seq" class="custom-select mr-sm-2" disabled>
                                <option value="" selected>Seleccione Provincia...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="CboMunicipios">Municipio:</label>
                              <select id="CboMunicipios" name="Municipio_Seq"  class="custom-select mr-sm-2" disabled>
                                <option value="" selected>Seleccione Municipio...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Comunidad">Comunidad:</label>
                              <input type="text" id="Comunidad" name="Comunidad" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Organizacion_Pertenece">Organización a la que Pertenece:</label>
                              <input type="text" id="Organizacion_Pertenece" name="Organizacion_Pertenece" 
                                     class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Sección: Datos personales -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Datos personales
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">

                            <div class="form-group col-md-6">
                              <label for="Tipo_Documento">Tipo de Documento:</label>
                              <select id="Tipo_Documento" name="Tipo_Documento" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione Tipo de Documento...</option>
                                <option value="1">C.I.</option>
                                <option value="2">R.U.N.</option>
                                <option value="3">LIBRETA DE S.M.</option>
                                <option value="4">PASAPORTE</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Numero_Documento">Número de Documento:</label>
                              <input type="number" id="Numero_Documento" name="Numero_Documento" 
                                class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="complemento">Complemento:</label>
                              <input type="text" id="complemento" name="complemento" value="" 
                                class="form-control" required>
                            </div>

                            <div class="form-group col-md-6"></div>

                            <div class="form-group col-md-3 mt-4">
                              <label for="Numero_Documento">Verificar con SEGIP:</label>
                              <button class="btn btn-primary btn-block mt-0">Verificar</button>
                            </div>

                            <div class="form-group col-md-6"></div>

                            <div class="form-group col-md-6 mt-4">
                              <label for="CboDepCI">Documento expedido en:</label>
                              <select id="CboDepCI" name="Expedido" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione...</option>
                              </select>
                            </div>

                            <div class="w-100"><hr></div>
                            

                            <div class="form-group col-md-6">
                              <label for="Primer_Apellido">Primer Apellido:</label>
                              <input type="text" id="Primer_Apellido" name="Primer_Apellido"
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Primer_Nombre">Primer Nombre:</label>
                              <input type="text" id="Primer_Nombre" name="Primer_Nombre"
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Segundo_Apellido">Segundo Apellido:</label>
                              <input type="text" id="Segundo_Apellido" name="Segundo_Apellido"
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Segundo_Nombre">Segundo Nombre:</label>
                              <input type="text" id="Segundo_Nombre" name="Segundo_Nombre"
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6 date" id='divMiCalendario'>
                              <label for="Fecha_Nacimiento">Fecha de nacimiento:</label>
                              <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento"
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Sexo">Sexo:</label>
                              <select id="Sexo" name="Sexo" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione un sexo...</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Estado_Civil">Estado Civil:</label>
                              <select id="Estado_Civil" name="Estado_Civil" class="custom-select mr-sm-2">
                                <option value="" selected>Seleccione el Estado Civil...</option>
                                <option value="1">SOLTERO</option>
                                <option value="2">CASADO</option>
                                <option value="3">DIVORCIADO</option>
                                <option value="4">VIUDO</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Direccion_vive">Dirección donde vive actualmente:</label>
                              <input type="text" id="Direccion_vive" name="Direccion_vive"
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Telefono">Teléfono:</label>
                              <input type="number" id="Telefono" name="Telefono" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Celular">Celular:</label>
                              <input type="number" id="Celular" name="Celular" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Sección: Datos Laborales -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Datos Laborales
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="Tipo_Trabajo">Modalidad de Trabajo como Médico Tradicional:</label>
                              <select id="Tipo_Trabajo" name="Tipo_Trabajo" class="custom-select mr-sm-2">
                                <option value="" selected>Seleccione la modalidad de trabajo...</option>
                                <option value="1">AMBULANTE</option>
                                <option value="2">FIJO</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Direccion_Trabajo">Dirección donde Trabaja como Médico Tradicional:</label>
                              <input type="text" id="Direccion_Trabajo" name="Direccion_Trabajo" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Sección: Datos de Especialidad -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Datos de Especialidad
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="CboEspecialidad">Especialidad:</label>
                              <select id="CboEspecialidad" name="Especialedad_Seq" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione una Especialidad...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="CboSubEspecialidad">Sub Especialidad:</label>
                              <select id="CboSubEspecialidad" name="SubEspecialidad_Seq" 
                                      class="custom-select mr-sm-2" required disabled>
                                <option value="" selected>Seleccione una Sub Especialidad...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Años de Experiencia:</label>
                              <input type="number" name="Anos_Experiencia_Especialidad"
                                      id="Anos_Experiencia_Especialidad" class="form-control" maxlength="2" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Anos_Experiencia_Sub_Especialidad">Años de Experiencia de Sub Especialidad:</label>
                              <input type="number" name="Anos_Experiencia_Sub_Especialidad"
                                      id="Anos_Experiencia_Sub_Especialidad" class="form-control" maxlength="2" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Numero_Pacientes">Número de Pacientes Ultimo Año(opcional)::</label>
                              <input type="number" id="Numero_Pacientes" name="Numero_Pacientes"
                                      class="form-control" maxlength="4">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Sección: Idiomas -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Idiomas que habla y escribe
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="col-md-12"> <!-- table-responsive -->
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>Idioma</th>
                                  <th>Habla</th>
                                  <th>Escribe</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <label class="form-check-label" for="">Castellano</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaCas">Si</label>
                                        <input type="radio" name="Lee" id="hablaCas" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaCas">No</label>
                                        <input type="radio" name="Lee" id="noHablaCas" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeCas">Si</label>
                                        <input type="radio" name="Escribe" id="escribeCas" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeCas">No</label>
                                        <input type="radio" name="Escribe" id="noEscribeCas" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Quechua</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaQue">Si</label>
                                        <input type="radio" name="Lee_Quechua" id="hablaQue" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaQue">No</label>
                                        <input type="radio" name="Lee_Quechua" id="noHablaQue" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="EscribeQue">Si</label>
                                        <input type="radio" name="EscribeQ" id="EscribeQue" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeQue">No</label>
                                        <input type="radio" name="EscribeQ" id="noEscribeQue" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Aymara</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaAym">Si</label>
                                        <input type="radio" name="LeeA" id="hablaAym" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaAym">No</label>
                                        <input type="radio" name="LeeA" id="noHablaAym" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeAym">Si</label>
                                        <input type="radio" name="EscribeA" id="escribeAym" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeAym">No</label>
                                        <input type="radio" name="EscribeA" id="noEscribeAym" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Guarani</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaGua">Si</label>
                                        <input type="radio" name="LeeG" id="hablaGua" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaGua">No</label>
                                        <input type="radio" name="LeeG" id="noHablaGua" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeGua">Si</label>
                                        <input type="radio" name="EscribeG" id="escribeGua" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeGua">No</label>
                                        <input type="radio" name="EscribeG" id="noEscribeGua" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Otro</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="hablaOtro">Si</label>
                                        <input type="radio" name="LeeO" id="hablaOtro" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaOtro">No</label>
                                        <input type="radio" name="LeeO" id="noHablaOtro" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeOtro">Si</label>
                                        <input type="radio" name="EscribeO" id="escribeOtro" class="form-check-input" value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeOtro">No</label>
                                        <input type="radio" name="EscribeO" id="noEscribeOtro" class="form-check-input" value="2"
                                               checked>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="Descripcion_idiomaO">Descripción de otro idioma:</label>
                              <input type="text" id="Descripcion_idiomaO" name="Descripcion_idiomaO" 
                                     class="form-control form-control-sm">
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Sección: Datos del Formulario -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Datos del Formulario
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="Codigo_Formulario">Código de Formulario:</label>
                              <input type="text" id="Codigo_Formulario" name="Codigo_Formulario"
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6"  id="divMiCalendario2">
                              <label for="Fecha_Formulario">Fecha del Formulario:</label>
                              <input type="text" id="Fecha_Formulario" name="Fecha_Formulario"
                                      class="form-control" required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php if(\App\Controller\Auth\Auth::user()->sys_rol_id == \App\Models\Rol::ADMINISTRADOR): ?>
                      <!-- Sección: Datos del Registro Sistema -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0 title-form">
                            Datos del Registro Sistema
                          </h5>
                        </div>
                        <div class="card-body">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="HoraRegistro_Formulario">Hora de Formulario:</label>
                              <input type="text" id="HoraRegistro_Formulario" name="HoraRegistro_Formulario" 
                                      value="<?php echo date(" H:i:s ",time()-3909600); ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="FechaRegistro_Formulario">Fecha del Formulario:</label>
                              <input type="text" id="FechaRegistro_Formulario" name="FechaRegistro_Formulario" value="<?php echo date(" d-m-Y ", time());?>" 
                                      class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <?php endif ?>
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
      <?php include_once __DIR__ . '/../partials/footer.php'; ?>
    </div>
  </div>

</body>

<!--   Core JS Files   -->
<?php include_once __DIR__ . '/../partials/scripts.php'; ?>

<script src="assets/v2/js/plugins/moment.min.js"></script>
<script src="assets/v2/js/plugins/daterangepicker.min.js"></script>

  <script type="text/javascript">

    $(document).ready(function () {

      $('#Fecha_Nacimiento').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        locale: {
          format: 'DD-MM-YYYY'
        }
      });
      
      $('#Fecha_Formulario').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        locale: {
          format: 'DD-MM-YYYY'
        }
      });
    
      cargar_Departamento();
      cargar_Especialidad();

      $("#CboDepartamento").change(function () {
        dependencia_Provincia();
      });

      $("#CboProvincia").change(function () {
        dependencia_Municipio();
      });

      $("#CboEspecialidad").change(function () {
        dependencia_SubEspe();
      });

    });

    function cargar_Departamento() {
      $.get("?c=Registro&a=getAllDepartaments", function (resultado) {

        var departament_html = '';

        $.each(resultado, function(clave, valor) {
          departament_html += `
            <option value="${valor.Seq_Departamento}">${valor.Nombre}</option>
          `;
        });

        // Insertando la lista de departamentos.
        $("#CboDepartamento").append(departament_html);
        $("#CboDepCI").append(departament_html);
        
      });
    }

    function dependencia_Provincia() {
      var code = $("#CboDepartamento").val();

      $.get("?c=Registro&a=getProvinceByDepartament", {
          code: code
        },
        function (resultado) {
          
          if (resultado == false) {
            alert("Error");
          } else {
            $("#CboProvincia").attr("disabled", false);
            document.getElementById("CboProvincia").options.length = 1;

            var province_html = '';

            $.each(resultado, function(clave, valor) {
              province_html += `
                <option value="${valor.id}">${valor.nombre}</option>
              `;
            });

            // Insertando la lista de provincias.
            $("#CboProvincia").append(province_html);
          }
        }

      );
    }

    function dependencia_Municipio() {
      var code = $("#CboProvincia").val();
      
      $.get("?c=Registro&a=getMunicipioByProvince", {
        code: code
      }, function (resultado) {
        if (resultado == false) {
          alert("Error");
        } else {
          $("#CboMunicipios").attr("disabled", false);
          document.getElementById("CboMunicipios").options.length = 1;
          
          var municipio_html = '';

          $.each(resultado, function(clave, valor) {
            municipio_html += `
              <option value="${valor.Seq_Municipio}">${valor.Nombre}</option>
            `;
          });

          // Insertando la lista de municipios.
          $('#CboMunicipios').append(municipio_html);
        }
      });

    }

    function cargar_Especialidad() {
      $.get("controller/cargar-Especialidad.php", function (resultado) {
        if (resultado == false) {
          alert("Error");
        } else {
          $('#CboEspecialidad').append(resultado);
        }
      });
    }

    function dependencia_SubEspe() {
      var code = $("#CboEspecialidad").val();
      $.get("controller/dependencia-SubEspecialidad.php", {
          code: code
        },
        function (resultado) {
          if (resultado == false) {
            alert("Error");
          } else {
            $("#CboSubEspecialidad").attr("disabled", false);
            document.getElementById("CboSubEspecialidad").options.length = 1;
            $('#CboSubEspecialidad').append(resultado);
          }
        }
      );
    }
  </script>

</html>