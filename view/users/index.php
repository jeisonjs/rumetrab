<?php 
  // session_start();
  include_once __DIR__ . '/../partials/head.php'; 

?>

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
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Agregar usuario</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=Registro&a=guardarUsuario">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="hidden" name="Seq_Usuario" 
                          value="<?php echo isset($user->Seq_Usuario) ? $user->Seq_Usuario : 0 ; ?>">
                        <input type="text" name="username" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="rol">Tipo de usuario:</label>
                        <select name="rolID" id="rol" class="custom-select mr-sm-2" required>
                          <option value="" selected>Seleccione una opción...</option>
                          <?php foreach($roles as $rol): ?>
                            <option value="<?php echo $rol->Seq_Rol; ?>"><?php echo $rol->Funcion; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <?php foreach($roles as $rol): ?>
                        <span class="text-lowercas">
                          <b> <?php echo ucfirst(strtolower($rol->Funcion)); ?> - </b> <?php echo ucfirst(strtolower($rol->Descripcion)); ?>
                        </span>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Crear usuario</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th >Nro.</th>
                      <th>Usuario</th>
                      <th>Fecha de registro</th>
                      <th>Uso</th>
                      <th>Actividad</th>
                      <th></th>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                      <tr>
                        <td><?php echo $user->Seq_Usuario; ?></td>
                        <td>
                          <div><?php echo $user->Usuario; ?></div>
                          <div class="small text-muted">
                            Tipo: <span><?php echo \App\Models\User::rol($user->sys_rol_id)->Funcion; ?></span>  
                          </div>
                        </td>
                        <td><?php echo date('Y-m-d', strtotime($user->Fecha_Registro)); ?></td>
                        <td>
                          <small class="text-muted">
                            <!-- Jun 11, 2015 - Jul 10, 2015 -->
                            <?php 
                              echo $userController->getUsage($user->Seq_Usuario);
                            ?>
                          </small>
                        </td>
                        <td>
                          <div class="small text-muted">Último acceso</div>
                          <strong>
                            <?php 
                              echo $userController->getActivity($user->Seq_Usuario);
                            ?>
                          </strong>
                        </td>
                        <td>
                          <a href="?c=Registro&amp;a=editarUsuario&amp;id=<?php echo $user->Seq_Usuario; ?>"
                            class="badge badge-primary p-1">
                            Editar
                          </a>
                          <a href="?c=Registro&amp;a=eliminarUsuario&amp;id=<?php echo $user->Seq_Usuario; ?>"
                            class="badge badge-danger p-1">
                            Eliminar
                          </a>
                        </td>
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

</html>