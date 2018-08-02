<h2 class="page-header text-center">Médicos Tradicionales Registrados</h2>

  <div class="table-responsive">   
  <table class="table table-striped">
    <thead>
        <tr>
            <th >Nro.</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha Nacimiento</th>
            <th>Sexo</th>
            <th>Fecha de Registro</th>
            <th></th>
            <!--
            <th style="width:120px;">Sexo</th>
            <th style="width:120px;">Nacimiento</th>
            <th style="width:120px;">Direccion</th>-->
            <th style="width:60px;">
                <a class="btn btn-primary" href="?c=Registro&a=Crud">
                    <img src="imagenes/add.png"> Nuevo Registro
                </a>
            </th>
         </tr>
    </thead>
    <tbody bgcolor="#d2e2f2">
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Seq_Registro; ?></td>
            <td ><?php echo $r->Primer_Nombre; ?></td>
            <td><?php echo $r->Segundo_Nombre; ?></td>
            <td><?php echo $r->Primer_Apellido; ?></td>
            <td><?php echo $r->Segundo_Apellido; ?></td>
            <td><?php echo $r->Fecha_Nacimiento; ?></td>
            <td><?php echo $r->Sexo == 1 ? 'Masculino' : 'Femenino'; ?></td>
            <td><?php echo $r->FechaRegistro_Servidor; ?></td>
            <td style="width:80px;"  align="right" >
                <a href="?c=Registro&a=Editar&Seq_Registro=<?php echo $r->Seq_Registro; ?>"><img src="imagenes/edit.png">Editar</a>
            </td>
            <td align="right">  
                <a target="_blank" href="?c=Registro&a=Datos_Medico&Seq_Registro=<?php echo $r->Seq_Registro; ?>"><img src="imagenes/print.png">Mostrar Matricula</a>
            </td>
           <!--<td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>-->
        </tr>
      <?php endforeach; ?>
     </tbody>
   </table> 
  </form>
</div>

