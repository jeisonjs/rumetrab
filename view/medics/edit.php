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
                  Modificando Registro de Médico Tradicional
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
                        <input type="hidden" id="Seq_Registro" name="Seq_Registro" value="<?php echo $alm->Seq_Registro; ?>" />

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
                                  <option value="">Seleccione Departamento...</option>
                                  <?php
                                    foreach ($departamentos as $item) {
                                      $pr = '';
                                      $pr .= "<option value='$item->Seq_Departamento'";
                                      $pr .= $alm->Departamento_Seq == $item->Seq_Departamento ? ' selected' : '';
                                      $pr .= ">$item->Nombre</option>";
                                      
                                      echo $pr;
                                    }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboProvincia">Provincia:</label>
                                <select id="CboProvincia" name="Provincia_Seq" class="custom-select mr-sm-2">
                                  <option value="">Seleccione Provincia...</option>
                                  <?php
                                    foreach ($provincias as $item) {
                                      $pr = '';
                                      $pr .= "<option value='$item->id'";
                                      $pr .= $alm->Provincia_Seq == $item->id ? ' selected' : '';
                                      $pr .= ">$item->nombre</option>";
                                      
                                      echo $pr;
                                    }
                                  ?>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboMunicipios">Municipio:</label>
                                <select id="CboMunicipios" name="Municipio_Seq" class="custom-select mr-sm-2">
                                  <option value="0">Seleccione Municipio...</option>
                                  <?php
                                    foreach ($municipios as $item) {
                                      $pr = '';
                                      $pr .= "<option value='$item->Seq_Municipio'";
                                      $pr .= $alm->Municipio_Seq == $item->Seq_Municipio ? ' selected' : '';
                                      $pr .= ">$item->Nombre</option>";
                                      
                                      echo $pr;
                                    }
                                  ?>
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

                              <div class="form-group col-md-3">
                                <label for="CboDepCI">Expedido:</label>
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

                              <div class="form-group col-md-6 date" id='divMiCalendario'>
                                <label for="Fecha_Nacimiento">Fecha de nacimiento:</label>
                                <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento" 
                                  value="<?php echo date(" d-m-Y ", strtotime($alm->Fecha_Nacimiento)); ?>" class="form-control" required>
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
                                <label for="Direccion_vive">Dirección donde vive actualmente:</label>
                                <input type="text" id="Direccion_vive" name="Direccion_vive" value="<?php echo $alm->Direccion_vive; ?>" 
                                      class="form-control" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Telefono">Teléfono:</label>
                                <input type="number" id="Telefono" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Celular">Celular:</label>
                                <input type="number" id="Celular" name="Celular" value="<?php echo $alm->Celular; ?>" class="form-control">
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
                                  <option <?php echo $alm->Especialedad_Seq == 1   ? 'selected' : ''; ?> value=" 1  "> TRADICIONAL  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 2   ? 'selected' : ''; ?> value=" 2  "> NATURISTA  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 3   ? 'selected' : ''; ?> value=" 3  "> PARTERA / O  </option>
                                  <option <?php echo $alm->Especialedad_Seq == 4   ? 'selected' : ''; ?> value=" 4  "> GUIAS ESPIRITUALES   </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="CboSubEspecialidad">Sub Especialidad:</label>
                                <select id="CboSubEspecialidad" name="SubEspecialidad_Seq" class="custom-select mr-sm-2" required>
                                  <option value="" selected>Seleccione una Sub Especialidad...</option>
                                  <option <?php echo $alm->SubEspecialidad_Seq == 1   ? 'selected' : ''; ?> value=" 1  "> FITOTERAPEUTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  2   ? 'selected' : ''; ?> value=" 2  "> HERBOLARIO/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  3   ? 'selected' : ''; ?> value=" 3  "> MATERO/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  4   ? 'selected' : ''; ?> value=" 4  "> MEDICO NATURISTA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  5   ? 'selected' : ''; ?> value=" 5  "> NATURISTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  6   ? 'selected' : ''; ?> value=" 6  "> NATURISTA TRADICIONAL  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  7   ? 'selected' : ''; ?> value=" 7  "> NUTRICIONISTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  8   ? 'selected' : ''; ?> value=" 8  "> PROMOTOR/A   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  9   ? 'selected' : ''; ?> value=" 9  "> TERAPEUTA  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  10    ? 'selected' : ''; ?> value=" 10   "> PARTERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  11    ? 'selected' : ''; ?> value=" 11   "> AMAUTAS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  12    ? 'selected' : ''; ?> value=" 12   "> AYSIRI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  13    ? 'selected' : ''; ?> value=" 13   "> HUESERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  14    ? 'selected' : ''; ?> value=" 14   "> IPAYES   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  15    ? 'selected' : ''; ?> value=" 15   "> JAMPIRI  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  16    ? 'selected' : ''; ?> value=" 16   "> KAKURI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  17    ? 'selected' : ''; ?> value=" 17   "> KALLAWAYAS   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  18    ? 'selected' : ''; ?> value=" 18   "> MEDICO TRADICIONAL   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  19    ? 'selected' : ''; ?> value=" 19   "> QHAPACHAQUERO/A  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  20    ? 'selected' : ''; ?> value=" 20   "> QULLIRI  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  21    ? 'selected' : ''; ?> value=" 21   "> SANTIGUADOR/RA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  22    ? 'selected' : ''; ?> value=" 22   "> YATIRI   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  23    ? 'selected' : ''; ?> value=" 23   "> SANTIGUADOR/RA   </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  24    ? 'selected' : ''; ?> value=" 24   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  25    ? 'selected' : ''; ?> value=" 25   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  26    ? 'selected' : ''; ?> value=" 26   "> OTROS  </option>
                                  <option <?php echo $alm->SubEspecialidad_Seq ==  27    ? 'selected' : ''; ?> value=" 27   "> OTROS  </option>
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Años de Experiencia:</label>
                                <input type="text" name="Anos_Experiencia_Especialidad" value="<?php echo $alm->Anos_Experiencia_Especialidad; ?>" 
                                      id="Anos_Experiencia_Especialidad" class="form-control" maxlength="2" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Anos_Experiencia_Sub_Especialidad">Años de Experiencia de Sub Especialidad:</label>
                                <input type="text" name="Anos_Experiencia_Sub_Especialidad" value="<?php echo $alm->Anos_Experiencia_Sub_Especialidad; ?>" 
                                      id="Anos_Experiencia_Sub_Especialidad" class="form-control" maxlength="2" required>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Numero_Pacientes">Número de Pacientes Ultimo Año(opcional)::</label>
                                <input type="text" id="Numero_Pacientes" name="Numero_Pacientes" value="<?php echo $alm->Numero_Pacientes; ?>" 
                                      class="form-control" maxlength="4">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección: Idiomas -->
                        <div class="card">
                          <div class="card-header">
                            <h5 class="mb-0 title-form">
                              Idiomas
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
                                        <input type="radio" name="Lee" id="hablaCas" class="form-check-input"
                                          <?php echo $alm->Lee == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaCas">No</label>
                                        <input type="radio" name="Lee" id="noHablaCas" class="form-check-input" 
                                          <?php echo $alm->Lee == 2 ? 'checked' : $alm->Lee != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeCas">Si</label>
                                        <input type="radio" name="Escribe" id="escribeCas" class="form-check-input"
                                          <?php echo $alm->Escribe == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeCas">No</label>
                                        <input type="radio" name="Escribe" id="noEscribeCas" class="form-check-input" 
                                          <?php echo $alm->Escribe == 2 ? 'checked' : $alm->Escribe != 1 ? 'checked' : '' ; ?> value="2">
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
                                        <input type="radio" name="Lee_Quechua" id="hablaQue" class="form-check-input"
                                          <?php echo $alm->Lee_Quechua == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaQue">No</label>
                                        <input type="radio" name="Lee_Quechua" id="noHablaQue" class="form-check-input" 
                                          <?php echo $alm->Lee_Quechua == 2 ? 'checked' : $alm->Lee_Quechua != 1 ? 'checked' : '' ; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="EscribeQue">Si</label>
                                        <input type="radio" name="EscribeQ" id="EscribeQue" class="form-check-input"
                                          <?php echo $alm->EscribeQ == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeQue">No</label>
                                        <input type="radio" name="EscribeQ" id="noEscribeQue" class="form-check-input" 
                                          <?php echo $alm->EscribeQ == 2 ? 'checked' : $alm->EscribeQ != 1 ? 'checked' : '' ; ?> value="2">
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
                                        <input type="radio" name="LeeA" id="hablaAym" class="form-check-input"
                                          <?php echo $alm->LeeA == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaAym">No</label>
                                        <input type="radio" name="LeeA" id="noHablaAym" class="form-check-input" 
                                          <?php echo $alm->LeeA == 2 ? 'checked' : $alm->LeeA != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeAym">Si</label>
                                        <input type="radio" name="EscribeA" id="escribeAym" class="form-check-input"
                                          <?php echo $alm->EscribeA == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeAym">No</label>
                                        <input type="radio" name="EscribeA" id="noEscribeAym" class="form-check-input" 
                                          <?php echo $alm->EscribeA == 2 ? 'checked' : $alm->EscribeA != 1 ? 'checked' : ''; ?> value="2">
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
                                        <input type="radio" name="LeeG" id="hablaGua" class="form-check-input"
                                          <?php echo $alm->LeeG == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaGua">No</label>
                                        <input type="radio" name="LeeG" id="noHablaGua" class="form-check-input" 
                                          <?php echo $alm->LeeG == 2 ? 'checked' : $alm->LeeG != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeGua">Si</label>
                                        <input type="radio" name="EscribeG" id="escribeGua" class="form-check-input"
                                          <?php echo $alm->EscribeG == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeGua">No</label>
                                        <input type="radio" name="EscribeG" id="noEscribeGua" class="form-check-input" 
                                          <?php echo $alm->EscribeG == 2 ? 'checked' : $alm->EscribeG != 1 ? 'checked' : ''; ?> value="2">
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
                                        <input type="radio" name="LeeO" id="hablaOtro" class="form-check-input"
                                          <?php echo $alm->LeeO == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noHablaOtro">No</label>
                                        <input type="radio" name="LeeO" id="noHablaOtro" class="form-check-input" 
                                          <?php echo $alm->LeeO == 2 ? 'checked' : $alm->LeeO != 1 ? 'checked' : ''; ?> value="2">
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="escribeOtro">Si</label>
                                        <input type="radio" name="EscribeO" id="escribeOtro" class="form-check-input"
                                          <?php echo $alm->EscribeO == 1 ? 'checked' : ''; ?> value="1" >
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="noEscribeOtro">No</label>
                                        <input type="radio" name="EscribeO" id="noEscribeOtro" class="form-check-input" 
                                          <?php echo $alm->EscribeO == 2 ? 'checked' : $alm->EscribeO != 1 ? 'checked' : ''; ?> value="2">
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
                                      value="<?php echo date(" d-m-Y ", strtotime($alm->Fecha_Formulario));?>" 
                                      class="form-control" required>
                              </div>
                            </div>
                          </div>
                        </div>

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
      var departament_html = '<option value="">Seleccione Departamento...</option>';

      $.each(resultado, function(clave, valor) {
        departament_html += `
          <option value="${valor.Seq_Departamento}">${valor.Nombre}</option>
        `;
      });

      // Insertando la lista de departamentos.
      $("#CboDepartamento").empty().append(departament_html);
      
      dependencia_Provincia();
    });
  }

  function dependencia_Provincia() {

      code = $("#CboDepartamento").val();
      $.get("?c=Registro&a=getProvinceByDepartament", {
          code: code
        },
        function (resultado) {
          var province_html = '<option value="">Seleccione Provincia...</option>';

          $.each(resultado, function(clave, valor) {
            province_html += `
              <option value="${valor.id}">${valor.nombre}</option>
            `;
          });

          // Insertando la lista de provincias.
          $("#CboProvincia").empty().append(province_html);

          dependencia_Municipio();
        }
      );
    }

    function dependencia_Municipio() {
      
      code = $("#CboProvincia").val();
      $.get("?c=Registro&a=getMunicipioByProvince", {
        code: code 
      }, function (resultado) {
        var municipio_html = '<option value="0">Seleccione Municipio...</option>';

        $.each(resultado, function(clave, valor) {
          municipio_html += `
            <option value="${valor.Seq_Municipio}">${valor.Nombre}</option>
          `;
        });

        // Insertando la lista de municipios.
        $('#CboMunicipios').empty().append(municipio_html);
        
      });
    }

    function cargar_Especialidad() {
      $.get("controller/cargar-Especialidad.php", function (resultado) {
        if (resultado == false) {
          alert("Error");
        } else {
          $('#CboEspecialidad').empty().append(resultado);
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
            $('#CboSubEspecialidad').empty().append(resultado);
          }
        }
      );
    }

</script>

</html>