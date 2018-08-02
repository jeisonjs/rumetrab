<h2 class="page-header text-center">Médicos Tradicionales Registrados</h2>

<div class="input-group">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" 
    placeholder="Ingrese Primer Nombre o Primer Apellido del Medico Tradicional que desea Buscar...">
</div>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nro.</th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Sexo</th>
        <th>Fecha de Registro</th>
      </tr>
    </thead>
    <tbody class="buscar">
      <?php foreach($this->model->Listar() as $r): ?>
      <tr>
        <td>
          <?php echo $r->Seq_Registro; ?>
        </td>
        <td>
          <?php echo $r->Primer_Nombre; ?>
        </td>
        <td>
          <?php echo $r->Segundo_Nombre; ?>
        </td>
        <td>
          <?php echo $r->Primer_Apellido; ?>
        </td>
        <td>
          <?php echo $r->Segundo_Apellido; ?>
        </td>
        <td>
          <?php echo $r->Fecha_Nacimiento; ?>
        </td>
        <td>
          <?php echo $r->Sexo == 1 ? 'Masculino' : 'Femenino'; ?>
        </td>
        <td>
          <?php echo $r->FechaRegistro_Servidor; ?>
        </td>
        <td style="width:80px;" align="right">
          <a href="?c=Registro&a=Editar&Seq_Registro=<?php echo $r->Seq_Registro; ?>">
            <img src="imagenes/edit.png">Editar </a>
        </td>
        <td style="width:100px;" align="right">
          <a target="_blank" href="?c=Registro&a=Datos_Medico&Seq_Registro=<?php echo $r->Seq_Registro; ?>">
            <img src="imagenes/print.png">Mostrar Matricula</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function () {

    (function ($) {

      $('#filtrar').keyup(function () {

        var rex = new RegExp($(this).val(), 'i');
        $('.buscar tr').hide();
        $('.buscar tr').filter(function () {
          return rex.test($(this).text());
        }).show();

      })

    }(jQuery));

  });
</script>