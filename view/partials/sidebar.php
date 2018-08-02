<div class="sidebar" data-color="black" data-active-color="danger">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="assets/v2/img/min-salud.svg">
      </div>
    </a>
    <a href="#" class="simple-text logo-normal">
      <span class="text-uppercase">Rumetrab</span>
      <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <?php 
    
      /**
       * Para agregar o quitar funcionalidades al usuario adicionar o 
       * eliminar los <li> ya que son los que poseen el respectivo 
       * enlace a la funcionalidad.
       * 
       * <li class="">
       *  <a href="?c=Registro&a=Principal">
       *   <i class="nc-icon nc-image"></i>
       *    <p>Dashboard</p>
       *  </a>
       * </li>
       * 
       * @param int $rol_id - Identidicador del rol en la base de datos.
       */
      switch (\App\Controller\Auth\Auth::user()->sys_rol_id) {
        case \App\Models\Rol::ADMINISTRADOR:
          echo '
            <ul class="nav">
              <li>
                <a href="?c=Registro&a=Crud">
                  <i class="nc-icon nc-bold"></i>
                  <p>Nuevo registro</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=MT">
                  <i class="nc-icon nc-money-coins"></i>
                  <p>Listar Médicos</p>
                </a>
              </li>
              <li>
              <li>
                <a href="?p=contacto">
                  <i class="nc-icon nc-spaceship"></i>
                  <p>Reportes</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=usuarios">
                  <i class="nc-icon nc-sound-wave"></i>
                  <p>Usuarios</p>
                </a>
              </li> 
              <li>
                <a href="?c=Registro&a=cerrar">
                  <i class="nc-icon nc-button-power"></i>
                  <p>Salir</p>
                </a>
              </li>
            </ul>
          ';
          break;
        case \App\Models\Rol::USUARIO:
          echo '
            <ul class="nav">
              <li>
                <a href="?c=Registro&a=Crud">
                  <i class="nc-icon nc-bold"></i>
                  <p>Nuevo registro</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=MT">
                  <i class="nc-icon nc-money-coins"></i>
                  <p>Listar Médicos</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=cerrar">
                  <i class="nc-icon nc-button-power"></i>
                  <p>Salir</p>
                </a>
              </li>
            </ul>
          ';
          break;
        case \App\Models\Rol::SUPERVISOR:
          echo '
            <ul class="nav">
              <li>
                <a href="?c=Registro&a=Crud">
                  <i class="nc-icon nc-bold"></i>
                  <p>Nuevo registro</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=MT">
                  <i class="nc-icon nc-money-coins"></i>
                  <p>Listar Médicos</p>
                </a>
              </li>
              <li>
              <li>
                <a href="?p=contacto">
                  <i class="nc-icon nc-spaceship"></i>
                  <p>Reportes</p>
                </a>
              </li>
              <li>
                <a href="?c=Registro&a=cerrar">
                  <i class="nc-icon nc-button-power"></i>
                  <p>Salir</p>
                </a>
              </li>
            </ul>
          ';
          break;
      }

    ?>
  </div>
</div>