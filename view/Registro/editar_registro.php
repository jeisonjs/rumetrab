<h1 class="page-header text-center">
   <!-- <?php echo $alm->id != null ? $alm->Primer_Nombre : 'Nuevo Registro de Médico Tradicional'; ?>-->
    <?php echo $alm->Seq_Registro != null ? 'Modificando Registro de Médico Tradicional': 'Nuevo Registro de Médico Tradicional'; ?>
</h1>

    <form id="frm-Registro" action="?c=Registro&a=Guardar" method="post" enctype="multipart/form-data">
           <input type="hidden" name="Seq_Registro" value="<?php echo $alm->Seq_Registro; ?>" />

<div class="form-horizontal">
 <!-- 1-->
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
   <div class="panel-body">
        <div class="col-md-6">
              <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Departamento:</label>
                 <div class="col-sm-8">
                    <select id="CboDepartamento" name="Departamento_Seq" class="form-control" data-validacion-tipo="requerido">
                      <option value="">Seleccione Departamento...</option>
                      <!--<option <?php echo $alm->Departamento_Seq ==80 ? 'selected' : ''; ?> value="80">BENI / TRINIDAD</option>
                      <option <?php echo $alm->Departamento_Seq ==10 ? 'selected' : ''; ?> value="10">CHUQUISACA / SUCRE</option>
                      <option <?php echo $alm->Departamento_Seq ==30 ? 'selected' : ''; ?> value="30">COCHABAMBA</option>
                      <option <?php echo $alm->Departamento_Seq ==20 ? 'selected' : ''; ?> value="20">LA PAZ</option>
                      <option <?php echo $alm->Departamento_Seq ==40 ? 'selected' : ''; ?> value="40">ORURO</option>
                      <option <?php echo $alm->Departamento_Seq ==90 ? 'selected' : ''; ?> value="90">PANDO / COBIJA</option>
                      <option <?php echo $alm->Departamento_Seq ==50 ? 'selected' : ''; ?> value="50">POTOSÍ</option>
                      <option <?php echo $alm->Departamento_Seq ==70 ? 'selected' : ''; ?> value="70">SANTA CRUZ</option>
                      <option <?php echo $alm->Departamento_Seq ==60 ? 'selected' : ''; ?> value="60">TARIJA</option>  -->
                    </select>
                 </div>
            </div>
            <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Provincia:</label>
                 <div class="col-sm-8">
                    <select id="CboProvincia" name="Provincia_Seq" class="form-control" data-validacion-tipo="requerido">
                      <option value="">Seleccione Provincia...</option>
                    </select>
                 </div>
            </div>
            <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Organización a la que Pertenece:</label>
                   <div class="col-sm-8">
                     <input type="text" name="Organizacion_Pertenece" value="<?php echo $alm->Organizacion_Pertenece; ?>" class="form-control" placeholder="Ingrese su nombre"/>        
                   </div>                  
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Municipio:</label>
                <div class="col-sm-8">
                  <select id="CboMunicipios" name="Municipio_Seq" class="form-control">
                   <option value="0">Seleccione Municipio...</option>
                  </select> 
                </div>
            </div>
            <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Comunidad:</label>
               <div class="col-sm-8">
                <input type="text" name="Comunidad" value="<?php echo $alm->Comunidad;?>" class="form-control" placeholder="Ingrese su Comunidad"/>
               </div>
            </div>
        </div>
    </div>
  </div>
</div>  

<!-- 2-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Especialidad:</label>
               <div class="col-sm-8">
                 <select id="CboEspecialidad" name="Especialedad_Seq"  class="form-control" data-validacion-tipo="requerido">
                  <option value="" >Seleccione Especialidad...</option>
                 </select> 
                 </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Sub Especialidad:</label>
                <div class="col-sm-8">
                 <select id="CboSubEspecialidad" name="SubEspecialidad_Seq" class="form-control" data-validacion-tipo="requerido">
                   <option value="0">Seleccione Sub Especialidad...</option>
                 </select> 
                </div>
            </div>
        </div>
    </div>
  </div>
 </div>  
</div>  
<!-- 3-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Primer Apellido:</label>
                <div class="col-sm-8">
                  <input type="text" name="Primer_Apellido" value="<?php echo $alm->Primer_Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:5" />
                </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Segundo Apellido:</label>
                <div class="col-sm-8">
                 <input type="text" name="Segundo_Apellido" value="<?php echo $alm->Segundo_Apellido; ?>" class="form-control" placeholder="Ingrese su segundo apellido"/>
                </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Tipo de Documento:</label>
                <div class="col-sm-8">
                  <select name="Tipo_Documento" class="form-control">
                    <option value="">Seleccione Tipo de Documento...</option>
                   <option <?php echo $alm->Tipo_Documento == 1 ? 'selected' : ''; ?> value="1">C.I.</option>
                   <option <?php echo $alm->Tipo_Documento == 2 ? 'selected' : ''; ?> value="2">R.U.N.</option>
                   <option <?php echo $alm->Tipo_Documento == 3 ? 'selected' : ''; ?> value="3">LIBRETA DE S.M.</option>
                   <option <?php echo $alm->Tipo_Documento == 4 ? 'selected' : ''; ?> value="4">PASAPORTE</option>
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Fecha de nacimiento:</label>
                    <div class="col-sm-8">
                     <input readonly type="text" name="Fecha_Nacimiento" value="<?php echo $alm->Fecha_Nacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento"/>
                    </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Estado Civil:</label>
                <div class="col-sm-8">
                <select name="Estado_Civil" class="form-control">
                    <option value="">Seleccione Estado Civil...</option>
                   <option <?php echo $alm->Estado_Civil == 1 ? 'selected' : ''; ?> value="1">SOLTERO</option>
                   <option <?php echo $alm->Estado_Civil == 2 ? 'selected' : ''; ?> value="2">CASADO</option>
                   <option <?php echo $alm->Estado_Civil == 3 ? 'selected' : ''; ?> value="3">DIVORCIADO</option>
                   <option <?php echo $alm->Estado_Civil == 4 ? 'selected' : ''; ?> value="4">VIUDO</option>
                  </select>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Primer Nombre:</label>
                <div class="col-sm-8">
                   <input type="text" name="Primer_Nombre" value="<?php echo $alm->Primer_Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />        
                </div>
            </div>
            <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Segundo Nombre:</label>
                <div class="col-sm-8">
                  <input type="text" name="Segundo_Nombre" value="<?php echo $alm->Segundo_Nombre; ?>" class="form-control" placeholder="Ingrese su segundo nombre" />
                </div>
            </div>
            <div class="form-group">

              <label for="MainContent_text" class="col-sm-4 control-label">Número de Documento:</label>
               <div class="col-sm-4">
                 <input type="text" name="Numero_Documento" value="<?php echo $alm->Numero_Documento; ?>" class="form-control" placeholder="Ingrese su Número de Documento" data-validacion-tipo="requerido|min:6"/>        
               </div>

                <div class="col-sm-4">
                 <select id="CboDepartamentoCI" name="Expedido"  class="form-control" data-validacion-tipo="requerido">
                  <option value="">Expedido...</option>
                 </select> 

                </div>
            </div>
            <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Sexo:</label>
                <div class="col-sm-8">
                  <select name="Sexo" class="form-control" data-validacion-tipo="requerido">
                    <option value="">Seleccione Sexo...</option>
                   <option <?php echo $alm->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                   <option <?php echo $alm->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
                  </select>
                </div>
            </div>  
            <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Certificado de Nacimiento Original:</label>
                <div class="col-sm-8">
                  <select name="Certificado_Naci" class="form-control">
                   <option value="">Seleccione Certificado de Nacimiento...</option>
                   <option <?php echo $alm->Certificado_Naci == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Certificado_Naci == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
        </div>
        </div>
    </div>
  </div>
</div>  
<!-- 4-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
  <h2>Idioma que habla y escribe</h2>
   <div class="panel-body">
        <div class="col-md-12 ">
            <div class="col-md-4">
              <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Castellano:</label>
                <div class="col-sm-8">
                  <select name="Castellano" class="form-control" data-validacion-tipo="requerido">
                   <option value="">Seleccione Idioma...</option>
                   <option <?php echo $alm->Castellano  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Castellano  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>         
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Lee:</label>
                <div class="col-sm-8">
                  <select name="Lee" class="form-control">
                   <option value="">Seleccione si lee...</option>
                   <option <?php echo $alm->Lee  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Lee  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
            </div>
              <div class="col-md-4 ">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Escribe:</label>
                <div class="col-sm-8">
                  <select name="Escribe" class="form-control">
                   <option value="">Seleccione si escribe...</option>
                   <option <?php echo $alm->Escribe  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Escribe  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div> 
            </div>
     </div>
     <br><br><br>
     <div class="col-md-12 ">
            <div class="col-md-4">
              <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Quechua:</label>
                <div class="col-sm-8">
                  <select name="Quechua" class="form-control" data-validacion-tipo="requerido">
                   <option value="">Seleccione Idioma...</option>
                   <option <?php echo $alm->Quechua  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Quechua  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>         
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Lee:</label>
                <div class="col-sm-8">
                  <select name="Lee_Quechua" class="form-control">
                   <option value="">Seleccione si lee...</option>
                   <option <?php echo $alm->Lee_Quechua == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Lee_Quechua == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
            </div>
              <div class="col-md-4 ">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Escribe:</label>
                <div class="col-sm-8">
                  <select name="EscribeQ" class="form-control">
                   <option value="">Seleccione si escribe...</option>
                   <option <?php echo $alm->EscribeQ  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->EscribeQ  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div> 
            </div>
      </div>
      <br><br><br>
     <div class="col-md-12 ">
            <div class="col-md-4">
              <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Aymara:</label>
                <div class="col-sm-8">
                  <select name="Aymara" class="form-control" data-validacion-tipo="requerido">
                   <option value="">Seleccione Idioma...</option>
                   <option <?php echo $alm->Aymara  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Aymara  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>         
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Lee:</label>
                <div class="col-sm-8">
                  <select name="LeeA" class="form-control">
                   <option value="">Seleccione si lee...</option>
                   <option <?php echo $alm->LeeA  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->LeeA  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
            </div>
              <div class="col-md-4 ">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Escribe:</label>
                <div class="col-sm-8">
                  <select name="EscribeA" class="form-control">
                   <option value="">Seleccione si escribe...</option>
                   <option <?php echo $alm->EscribeA  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->EscribeA  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div> 
            </div>
      </div>
      <br><br><br>
     <div class="col-md-12 ">
            <div class="col-md-4">
              <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Guarani:</label>
                <div class="col-sm-8">
                  <select name="Guarani" class="form-control" data-validacion-tipo="requerido">
                   <option value="">Seleccione Idioma...</option>
                   <option <?php echo $alm->Guarani  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Guarani  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>         
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Lee:</label>
                <div class="col-sm-8">
                  <select name="LeeG" class="form-control">
                   <option value="">Seleccione si lee...</option>
                   <option <?php echo $alm->LeeG  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->LeeG  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
            </div>
              <div class="col-md-4 ">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Escribe:</label>
                <div class="col-sm-8">
                  <select name="EscribeG" class="form-control">
                   <option value="">Seleccione si escribe...</option>
                   <option <?php echo $alm->EscribeG  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->EscribeG  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div> 
            </div>
      </div>
      <br><br><br>
     <div class="col-md-12 ">
            <div class="col-md-4">
              <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Otro:</label>
                <div class="col-sm-8">
                  <select name="Otro" class="form-control" data-validacion-tipo="requerido">
                   <option value="">Seleccione Idioma...</option>
                   <option <?php echo $alm->Otro  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->Otro  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>         
            </div>
            <div class="col-md-4">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Lee:</label>
                <div class="col-sm-8">
                  <select name="LeeO" class="form-control">
                   <option value="">Seleccione si lee...</option>
                   <option <?php echo $alm->LeeO == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->LeeO == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div>        
            </div>
              <div class="col-md-4 ">
             <div class="form-group">
              <label for="MainContent_text" class="col-sm-4 control-label">Escribe:</label>
                <div class="col-sm-8">
                  <select name="EscribeO" class="form-control">
                   <option value="">Seleccione si escribe...</option>
                   <option <?php echo $alm->EscribeO  == 1 ? 'selected' : ''; ?> value="1">SI</option>
                   <option <?php echo $alm->EscribeO  == 2 ? 'selected' : ''; ?> value="2">NO</option>
                  </select>
                </div>
            </div> 
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Descripción de otro idioma:</label>
                <div class="col-sm-8">
                  <input type="text" name="Descripcion_idiomaO" value="<?php echo $alm->Descripcion_idiomaO; ?>" class="form-control" placeholder="Introduzca otro idioma" />
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
 </div>  
</div>  
<!-- 5-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
    <h2>Datos de Residencia</h2>
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Dirección donde vive actualmente:</label>
                <div class="col-sm-8">
                  <input type="text" name="Direccion_vive" value="<?php echo $alm->Direccion_vive; ?>" class="form-control" placeholder="Ingrese su dirección donde vive..." data-validacion-tipo="requerido|min:5" />
                </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Lugar donde Trabaja como Médico Tradicional:</label>
                <div class="col-sm-8">
                  <select name="Tipo_Trabajo" class="form-control">
                    <option value="">Seleccione tipo de trabajo...</option>
                   <option <?php echo $alm->Tipo_Trabajo == 1 ? 'selected' : ''; ?> value="1">AMBULANTE</option>
                   <option <?php echo $alm->Tipo_Trabajo == 2 ? 'selected' : ''; ?> value="2">FIJO</option>

                  </select>
                </div>
            </div> 
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Celular:</label>
                <div class="col-sm-8">
                 <input type="text" name="Celular" value="<?php echo $alm->Celular; ?>" class="form-control" placeholder="Ingrese su número de celular..."/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Teléfono:</label>
                <div class="col-sm-8">
                 <input type="text" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control" placeholder="Ingrese su número de teléfono..."/>
                </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Dirección donde Trabaja como Médico Tradicional:</label>
                <div class="col-sm-8">
                 <input type="text" name="Direccion_Trabajo" value="<?php echo $alm->Direccion_Trabajo; ?>" class="form-control" placeholder="Ingrese su dirección donde trabaja como Médico..."/>
                </div>
            </div>
        </div>
    </div>
  </div>
 </div>  
</div> 
<!-- 6-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
    <h2>Datos de Especialidad </h2>
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Años de Experiencia de Especialidad:</label>
                <div class="col-sm-8">
                  <input type="text" name="Anos_Experiencia_Especialidad" value="<?php echo $alm->Anos_Experiencia_Especialidad; ?>" maxlength="2" class="form-control" placeholder="Introduzca solo números Ej.: (10) – (20)" data-validacion-tipo="requerido|min:1"/>
                </div>
            </div>
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Número de Pacientes Ultimo Año(opcional):</label>
                <div class="col-sm-8">
                 <input type="text" name="Numero_Pacientes" value="<?php echo $alm->Numero_Pacientes; ?>" class="form-control" maxlength="4" placeholder="Introduzca Número de Pacientes Ultimo Año"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Años de Experiencia de Sub Especialidad:</label>
                <div class="col-sm-8">
                 <input type="text" name="Anos_Experiencia_Sub_Especialidad" value="<?php echo $alm->Anos_Experiencia_Sub_Especialidad; ?>" maxlength="2" class="form-control" placeholder="Introduzca solo números Ej.: (10) – (20)"/>
                </div>
            </div>
        </div>
    </div>
  </div>
 </div>  
</div> 
<!-- 7-->
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
    <h2>Datos del Formulario</h2>
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">Código de Formulario:</label>
                <div class="col-sm-8">
                  <input type="text" name="Codigo_Formulario" value="<?php echo $alm->Codigo_Formulario; ?>" class="form-control" placeholder="Ingrese su código de formulario" data-validacion-tipo="requerido" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
             <div class="form-group">
                <label for="MainContent_text" class="col-sm-4 control-label">Fecha del Formulario:</label>
                    <div class="col-sm-8">
                     <input readonly type="text" name="Fecha_Formulario" value="<?php echo $alm->Fecha_Formulario; ?>" class="form-control datepicker" placeholder="Ingrese su fecha del formulario" data-validacion-tipo="requerido"/>
                    </div>
            </div>
        </div>
    </div>
  </div>
 </div>  
</div> 
<div class="form-horizontal">
 <div class="container-fluid" >
  <div class="container-fluid" style="border-width:4px; border-style: groove; border-color: #e4e8ec">
    <h2>Datos del Registro Sistema</h2>
   <div class="panel-body">
        <div class="col-md-6">
            <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">hora de Formulario:</label>
                <div class="col-sm-8">
                   <input readonly type="text" name="HoraRegistro_Formulario" value="<?php echo date("H:i:s",time()-3909600); ?>"class="form-control" />  
                </div>
            </div>
        </div>

        <div class="col-md-6">
             <div class="form-group">
               <label for="MainContent_text" class="col-sm-4 control-label">fecha de Formulario:</label>
                <div class="col-sm-8">
                   <input readonly type="text" name="FechaRegistro_Formulario" value="<?php echo date("d-m-Y ", time());?>" class="form-control" />  
                </div>
            </div>
        </div>
    </div>
  </div>
 </div>  
</div> 

<div class="form-horizontal">
    <div class="text-center">
         <button class="btn btn-success"><img src="imagenes/save.png"> Guardar</button>
         <a class="btn btn-success" href="?c=Registro&a=MT"> <img src="imagenes/cancel.png"> Cancelar</a>
    </div>
</div>                   
                 <br/>
         </div>
    </form>
<?php

echo date("H:i:s",time()-3909600);

$time = time();

echo "<br/>";

echo date("d-m-Y ", $time);

echo "<br/>";

echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));

?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#frm-Registro").submit(function(){
            return $(this).validate();
        });
    })

$(document).ready(function(){
    cargar_Departamento();
    $("#CboDepartamento").change(function(){dependencia_Provincia();});
    $("#CboProvincia").change(function(){dependencia_Municipio();});
    $("#CboProvincia").attr("disabled",true);
    $("#CboMunicipios").attr("disabled",true);
    cargar_DepartamentoCI();
    cargar_Especialidad();
    $("#CboEspecialidad").change(function(){dependencia_SubEspe();});
    $("#CboSubEspecialidad").attr("disabled",true);
});

function cargar_Departamento()
{
    $.get("controller/cargar-Dep.php", function(resultado){
        if(resultado == false)
        {
            alert("Error");
        }
        else
        {
            $('#CboDepartamento').append(resultado);            
        }
    }); 
}

function dependencia_Provincia()
{
    var code = $("#CboDepartamento").val();
    $.get("controller/dependencia-Provincia.php", { code: code },
        function(resultado)
        {
            if(resultado == false)
            {
                alert("Error");
            }
            else
            {
                $("#CboProvincia").attr("disabled",false);
                document.getElementById("CboProvincia").options.length=1;
                $('#CboProvincia').append(resultado);           
            }
        }

    );
}
function dependencia_Municipio()
{
    var code = $("#CboProvincia").val();
    $.get("controller/dependencia-Municipio.php?", { code: code }, function(resultado){
        if(resultado == false)
        {
            alert("Error");
        }
        else
        {
            $("#CboMunicipios").attr("disabled",false);
            document.getElementById("CboMunicipios").options.length=1;
            $('#CboMunicipios').append(resultado);          
        }
    }); 
    
}
function cargar_DepartamentoCI()
{
    $.get("controller/cargar-DepCI.php", function(resultado){
        if(resultado == false)
        {
            alert("Error");
        }
        else
        {
            $('#CboDepartamentoCI').append(resultado);          
        }
    }); 
}
function cargar_Especialidad()
{
    $.get("controller/cargar-Especialidad.php", function(resultado){
        if(resultado == false)
        {
            alert("Error");
        }
        else
        {
            $('#CboEspecialidad').append(resultado);            
        }
    }); 
}
function dependencia_SubEspe()
{
    var code = $("#CboEspecialidad").val();
    $.get("controller/dependencia-SubEspecialidad.php", { code: code },
        function(resultado)
        {
            if(resultado == false)
            {
                alert("Error");
            }
            else
            {
                $("#CboSubEspecialidad").attr("disabled",false);
                document.getElementById("CboSubEspecialidad").options.length=1;
                $('#CboSubEspecialidad').append(resultado);           
            }
        }
    );
}
</script>


