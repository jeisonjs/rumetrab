<?php include_once __DIR__ . '/../partials/head.php'; ?>

<body>
  <div class="wrapper ">
    <?php include_once __DIR__ . '/../partials/sidebar.php'; ?>
    <div class="main-panel">
      <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
      <div class="content">
        <div class="row">
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
                          value="<?php echo $user->Seq_Usuario; ?>">
                        <input type="text" name="username" class="form-control" 
                          value="<?php echo $user->Usuario; ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="rol">Tipo de usuario:</label>
                        <select name="rolID" id="rol" class="custom-select mr-sm-2" required>
                          <option value="">Seleccione una opción...</option>
                          <?php foreach($roles as $rol): ?>
                            <option value="<?php echo $rol->Seq_Rol; ?>" 
                                <?php echo $rol->Seq_Rol == $user->sys_rol_id ? 'selected' : ''; ?> >
                              <?php echo $rol->Funcion; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nueva Contraseña</label>
                        <input type="hidden" name="oldPassword" 
                          value="<?php echo $user->Password; ?>">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Actualizar usuario</button>
                    </div>
                  </div>
                </form>
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
<?php include_once __DIR__ . '/../partials/scripts.php'; ?>

</html>