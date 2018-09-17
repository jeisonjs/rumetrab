<?php include_once __DIR__ . '/../partials/head.php'; ?>

<body>
  <div class="wrapper ">
    <?php include_once __DIR__ . '/../partials/sidebar.php'; ?>
    <div class="main-panel">
      <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
      <div class="content">
        <div class="row">
          <?php if(isset($_SESSION['result'])): ?>
            <div class="col-md-12">
              <div class="alert alert-<?php echo $_SESSION['result']['notification'] ?> alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="nc-icon nc-single-copy-04"></i>
                </button>
                <span><?php echo $_SESSION['result']['message'] ?></span>
              </div>
            </div>
          <?php endif ?>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="title">Médicos Tradicionales Registrados</h5>
                  </div>
                  <div class="col-md-6">
                    <a href="?c=Registro&a=Crud" class="btn btn-primary mt-0 float-md-right">
                      Nuevo Registro
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="form-group">
                  <label for="exampleInputEmail1">Buscar médico</label>
                  <input type="email" class="form-control" id="filtrar" placeholder="Primer Nombre o Primer Apellido">
                  <small id="emailHelp" class="form-text text-muted">
                    Ingrese Primer Nombre o Primer Apellido del Medico Tradicional que desea Buscar...
                  </small>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="buscar">
                    <thead class=" text-primary">
                      <th >Nro.</th>
                      <th>Primer Nombre</th>
                      <th>Segundo Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Segundo Apellido</th>
                      <th>Fecha Nacimiento</th>
                      <th>Sexo</th>
                      <th>Fecha de Registro</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach($this->model->Listar() as $r): ?>
                        <tr>
                          <td><?php echo $r->Seq_Registro; ?></td>
                          <td><?php echo $r->Primer_Nombre; ?></td>
                          <td><?php echo $r->Segundo_Nombre; ?></td>
                          <td><?php echo $r->Primer_Apellido; ?></td>
                          <td><?php echo $r->Segundo_Apellido; ?></td>
                          <td><?php echo $r->Fecha_Nacimiento; ?></td>
                          <td><?php echo $r->Sexo == 1 ? 'Masculino' : 'Femenino'; ?></td>
                          <td><?php echo $r->FechaRegistro_Servidor; ?></td>
                          <?php if(\App\Controller\Auth\Auth::user()->sys_rol_id != \App\Models\Rol::USUARIO): ?>
                          <td style="width:80px;" align="right" >
                            <a href="?c=Registro&a=Editar&Seq_Registro=<?php echo $r->Seq_Registro; ?>">
                              <img src="imagenes/edit.png">Editar
                            </a>
                          </td>
                          <td align="right">  
                            <a target="_blank" href="?c=Registro&a=Datos_Medico&Seq_Registro=<?php echo $r->Seq_Registro; ?>">
                              <img src="imagenes/print.png">Mostrar Matricula
                            </a>
                          </td>
                          <td>
                            <a href="?c=Registro&amp;a=Eliminar&amp;Seq_Registro=<?php echo $r->Seq_Registro; ?>"
                              class="badge badge-danger p-1">
                              Eliminar
                            </a>
                            <!-- <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a> -->
                          </td>
                          <?php endif; ?>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once __DIR__ . '/../partials/footer.php'; ?>
    </div>
  </div>

</body>
<!--   Core JS Files   -->
<?php 
  include_once __DIR__ . '/../partials/scripts.php';
  unset($_SESSION['result']);
 ?>

<script type="text/javascript">

  $(document).ready(function () {

    (function ($) {

      $('#filtrar').keyup(function () {

        var rex = new RegExp($(this).val(), 'i');
        $('#buscar tr').hide();
        $('#buscar tr').filter(function () {
          return rex.test($(this).text());
        }).show();

      })

    }(jQuery));

  });
</script>
</html>