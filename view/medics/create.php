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
                      <input type="hidden" name="Seq_Registro" value="<?php echo $alm->Seq_Registro; ?>" />

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
                              <select id="CboProvincia" name="Provincia_Seq" class="custom-select mr-sm-2">
                                <option value="" selected>Seleccione Provincia...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="CboMunicipios">Municipio:</label>
                              <select id="CboMunicipios" name="Municipio_Seq"  class="custom-select mr-sm-2">
                                <option value="0" selected>Seleccione Municipio...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Comunidad">Comunidad:</label>
                              <input type="text" id="Comunidad" name="Comunidad" value="<?php echo $alm->Comunidad;?>" 
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Organizacion_Pertenece">Organización a la que Pertenece:</label>
                              <input type="text" id="Organizacion_Pertenece" name="Organizacion_Pertenece" 
                                      value="<?php echo $alm->Organizacion_Pertenece; ?>" class="form-control">
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
                                <option <?php echo $alm->Tipo_Documento == 1 ? 'selected' : ''; ?> value="1">C.I.</option>
                                <option <?php echo $alm->Tipo_Documento == 2 ? 'selected' : ''; ?> value="2">R.U.N.</option>
                                <option <?php echo $alm->Tipo_Documento == 3 ? 'selected' : ''; ?> value="3">LIBRETA DE S.M.</option>
                                <option <?php echo $alm->Tipo_Documento == 4 ? 'selected' : ''; ?> value="4">PASAPORTE</option>
                              </select>
                            </div>

                            <div class="form-group col-md-3">
                              <label for="Numero_Documento">Número de Documento:</label>
                              <input type="number" id="Numero_Documento" name="Numero_Documento" value="<?php echo $alm->Numero_Documento; ?>" 
                                class="form-control" required>
                            </div>

                            <div class="form-group col-md-3 mt-3">
                              <button class="btn btn-primary">SIGET</button>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="CboDepCI">Documento expedido en:</label>
                              <select id="CboDepCI" name="Expedido" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione...</option>
                                <option <?php echo $alm->Expedido ==80 ? 'selected' : ''; ?> value="80">BENI / TRINIDAD</option>
                                <option <?php echo $alm->Expedido ==10 ? 'selected' : ''; ?> value="10">CHUQUISACA / SUCRE</option>
                                <option <?php echo $alm->Expedido ==30 ? 'selected' : ''; ?> value="30">COCHABAMBA</option>
                                <option <?php echo $alm->Expedido ==20 ? 'selected' : ''; ?> value="20">LA PAZ</option>
                                <option <?php echo $alm->Expedido ==40 ? 'selected' : ''; ?> value="40">ORURO</option>
                                <option <?php echo $alm->Expedido ==90 ? 'selected' : ''; ?> value="90">PANDO / COBIJA</option>
                                <option <?php echo $alm->Expedido ==50 ? 'selected' : ''; ?> value="50">POTOSÍ</option>
                                <option <?php echo $alm->Expedido ==70 ? 'selected' : ''; ?> value="70">SANTA CRUZ</option>
                                <option <?php echo $alm->Expedido ==60 ? 'selected' : ''; ?> value="60">TARIJA</option>
                              </select>
                            </div>

                            <div class="w-100"><hr></div>
                            

                            <div class="form-group col-md-6">
                              <label for="Primer_Apellido">Primer Apellido:</label>
                              <input type="text" id="Primer_Apellido" name="Primer_Apellido" value="<?php echo $alm->Primer_Apellido; ?>" 
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Primer_Nombre">Primer Nombre:</label>
                              <input type="text" id="Primer_Nombre" name="Primer_Nombre" value="<?php echo $alm->Primer_Nombre; ?>" 
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Segundo_Apellido">Segundo Apellido:</label>
                              <input type="text" id="Segundo_Apellido" name="Segundo_Apellido" value="<?php echo $alm->Segundo_Apellido; ?>" 
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Segundo_Nombre">Segundo Nombre:</label>
                              <input type="text" id="Segundo_Nombre" name="Segundo_Nombre" value="<?php echo $alm->Segundo_Nombre; ?>" 
                                      class="form-control">
                            </div>

                            <div class="form-group col-md-6 date" id='divMiCalendario'>
                              <label for="Fecha_Nacimiento">Fecha de nacimiento:</label>
                              <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento" value="<?php echo $alm->Fecha_Nacimiento; ?>" 
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Sexo">Sexo:</label>
                              <select id="Sexo" name="Sexo" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione un sexo...</option>
                                <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                                <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Estado_Civil">Estado Civil:</label>
                              <select id="Estado_Civil" name="Estado_Civil" class="custom-select mr-sm-2">
                                <option value="" selected>Seleccione el Estado Civil...</option>
                                <option <?php echo $alm->Estado_Civil == 1 ? 'selected' : ''; ?> value="1">SOLTERO</option>
                                <option <?php echo $alm->Estado_Civil == 2 ? 'selected' : ''; ?> value="2">CASADO</option>
                                <option <?php echo $alm->Estado_Civil == 3 ? 'selected' : ''; ?> value="3">DIVORCIADO</option>
                                <option <?php echo $alm->Estado_Civil == 4 ? 'selected' : ''; ?> value="4">VIUDO</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Certificado_Naci">Certificado de Nacimiento Original:</label>
                              <select id="Certificado_Naci" name="Certificado_Naci" class="custom-select mr-sm-2">
                                <option value="" selected>Seleccione una opción...</option>
                                <option <?php echo $alm->Certificado_Naci == 1 ? 'selected' : ''; ?> value="1">SI</option>
                                <option <?php echo $alm->Certificado_Naci == 2 ? 'selected' : ''; ?> value="2">NO</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Direccion_vive">Dirección donde vive actualmente:</label>
                              <input type="text" id="Direccion_vive" name="Direccion_vive" value="<?php echo $alm->Direccion_vive; ?>" 
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Telefono">Teléfono:</label>
                              <input type="tel" id="Telefono" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Celular">Celular:</label>
                              <input type="tel" id="Celular" name="Celular" value="<?php echo $alm->Celular; ?>" class="form-control">
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
                                <option <?php echo $alm->Tipo_Trabajo == 1 ? 'selected' : ''; ?> value="1">AMBULANTE</option>
                                <option <?php echo $alm->Tipo_Trabajo == 2 ? 'selected' : ''; ?> value="2">FIJO</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Direccion_Trabajo">Dirección donde Trabaja como Médico Tradicional:</label>
                              <input type="text" id="Direccion_Trabajo" name="Direccion_Trabajo" value="<?php echo $alm->Direccion_Trabajo; ?>" class="form-control">
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
                              <select id="CboSubEspecialidad" name="SubEspecialidad_Seq" class="custom-select mr-sm-2" required>
                                <option value="" selected>Seleccione una Sub Especialidad...</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Años de Experiencia:</label>
                              <input type="number" name="Anos_Experiencia_Especialidad" value="<?php echo $alm->Anos_Experiencia_Especialidad; ?>" 
                                      id="Anos_Experiencia_Especialidad" class="form-control" maxlength="2" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Anos_Experiencia_Sub_Especialidad">Años de Experiencia de Sub Especialidad:</label>
                              <input type="number" name="Anos_Experiencia_Sub_Especialidad" value="<?php echo $alm->Anos_Experiencia_Sub_Especialidad; ?>" 
                                      id="Anos_Experiencia_Sub_Especialidad" class="form-control" maxlength="2" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Numero_Pacientes">Número de Pacientes Ultimo Año(opcional)::</label>
                              <input type="number" id="Numero_Pacientes" name="Numero_Pacientes" value="<?php echo $alm->Numero_Pacientes; ?>" 
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

                          <!-- <div class="form-row">
                            <div class="form-group col-md-">
                              <label for="inputEmail4">Seleccione los idiomas que habla y escribe:</label>
                              <select multiple name="idioma_habla_lee[]" id="idioma_habla_lee" class="custom-select mr-sm-2">
                                <option value="1">Castellano</option>
                                <option value="2">Quechua</option>
                                <option value="3">Aymara</option>
                                <option value="3">Guarani</option>
                                <option value="3">Otro</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="Descripcion_idiomaO">Descripción de otro idioma:</label>
                              <input type="text" id="Descripcion_idiomaO" name="Descripcion_idiomaO" 
                                      value="<?php echo $alm->Descripcion_idiomaO; ?>" class="form-control">
                            </div>
                          </div> -->

                          <div class="form-row">
                            <div class="col-md-12"> <!-- table-responsive -->
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>Idioma</th>
                                  <th>Seleccionar</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <label class="form-check-label" for="">Castellano</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="casYes">Si</label>
                                        <input type="radio" name="Castellano" id="casYes" class="form-check-input"
                                          <?php echo $alm->Castellano == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="casNo">No</label>
                                        <input type="radio" name="Castellano" id="casNo" class="form-check-input" 
                                          <?php echo $alm->Castellano == 2 ? 'checked' : $alm->Castellano != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Quechua</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="QueYes">Si</label>
                                        <input type="radio" name="Quechua" id="QueYes" class="form-check-input"
                                          <?php echo $alm->Quechua == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="QueNo">No</label>
                                        <input type="radio" name="Quechua" id="QueNo" class="form-check-input" 
                                          <?php echo $alm->Quechua == 2 ? 'checked' : $alm->Quechua != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Aymara</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="AymYes">Si</label>
                                        <input type="radio" name="Aymara" id="AymYes" class="form-check-input"
                                          <?php echo $alm->Aymara == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="AymNo">No</label>
                                        <input type="radio" name="Aymara" id="AymNo" class="form-check-input" 
                                          <?php echo $alm->Aymara == 2 ? 'checked' : $alm->Aymara != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Guarani</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="GuaYes">Si</label>
                                        <input type="radio" name="Guarani" id="GuaYes" class="form-check-input"
                                          <?php echo $alm->Guarani == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="GuaNo">No</label>
                                        <input type="radio" name="Guarani" id="GuaNo" class="form-check-input" 
                                          <?php echo $alm->Guarani == 2 ? 'checked' : $alm->Guarani != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label class="form-check-label">Otro</label>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="OtroYes">Si</label>
                                        <input type="radio" name="Otro" id="OtroYes" class="form-check-input"
                                          <?php echo $alm->Otro == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="OtroNo">No</label>
                                        <input type="radio" name="Otro" id="OtroNo" class="form-check-input" 
                                          <?php echo $alm->Otro == 2 ? 'checked' : $alm->Otro != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="Descripcion_idiomaO">Descripción de otro idioma:</label>
                              <input type="text" id="Descripcion_idiomaO" name="Descripcion_idiomaO" 
                                      value="<?php echo $alm->Descripcion_idiomaO; ?>" class="form-control form-control-sm">
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
                              <input type="text" id="Codigo_Formulario" name="Codigo_Formulario" value="<?php echo $alm->Codigo_Formulario; ?>" 
                                      class="form-control" required>
                            </div>

                            <div class="form-group col-md-6"  id="divMiCalendario2">
                              <label for="Fecha_Formulario">Fecha del Formulario:</label>
                              <input type="text" id="Fecha_Formulario" name="Fecha_Formulario" 
                                      value="<?php echo $alm->Fecha_Formulario; ?>"
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

    $('#Fecha_Nacimiento').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      locale: {
        format: 'YYYY-MM-DD'
      }
    });
    
    $('#Fecha_Formulario').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      locale: {
        format: 'YYYY-MM-DD'
      }
    });



    $(document).ready(function () {
      cargar_Departamento();

      $("#CboDepartamento").change(function () {
        dependencia_Provincia();
      });

      $("#CboProvincia").change(function () {
        dependencia_Municipio();
      });

      $("#CboProvincia").attr("disabled", true);

      $("#CboMunicipios").attr("disabled", true);

      cargar_DepartamentoCI();
      cargar_Especialidad();

      $("#CboEspecialidad").change(function () {
        dependencia_SubEspe();
      });

      $("#CboSubEspecialidad").attr("disabled", true);
    });

    function cargar_Departamento() {
      $.get("controller/cargar-Dep.php", function (resultado) {
        
        if (resultado == false) {
          alert("Error");
        } else {
          $('#CboDepartamento').append(resultado);
        }
      });
    }

    function dependencia_Provincia() {
      var code = $("#CboDepartamento").val();
      $.get("controller/dependencia-Provincia.php", {
          code: code
        },
        function (resultado) {
          if (resultado == false) {
            alert("Error");
          } else {
            $("#CboProvincia").attr("disabled", false);
            document.getElementById("CboProvincia").options.length = 1;
            $('#CboProvincia').append(resultado);
          }
        }

      );
    }

    function dependencia_Municipio() {
      var code = $("#CboProvincia").val();
      $.get("controller/dependencia-Municipio.php?", {
        code: code
      }, function (resultado) {
        if (resultado == false) {
          alert("Error");
        } else {
          $("#CboMunicipios").attr("disabled", false);
          document.getElementById("CboMunicipios").options.length = 1;
          $('#CboMunicipios').append(resultado);
        }
      });

    }

    function cargar_DepartamentoCI() {
      $.get("controller/cargar-DepCI.php", function (resultado) {
        if (resultado == false) {
          alert("Error");
        } else {
          $('#CboDepartamentoCI').append(resultado);
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