<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
<div class="container-fluid">
  <div class="navbar-wrapper">
    <div class="navbar-toggle">
      <button type="button" class="navbar-toggler">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <a class="navbar-brand" href="#pablo">
      Bienvenido <?php echo \App\Controller\Auth\Auth::user()->Usuario ?>
    </a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navigation">
    <ul class="navbar-nav">
      <li class="nav-item btn-rotate dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="nc-icon nc-simple-add"></i>
          <p>
            <span class="d-lg-none d-md-block">Otras acciones</span>
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <?php if(\App\Controller\Auth\Auth::user()->sys_rol_id == \App\Models\Rol::ADMINISTRADOR): ?>
            <a class="dropdown-item" href="?c=Registro&a=usuarios">Usuarios</a>
          <?php endif ?>
          <div class="divider"></div>
          <a class="dropdown-item" href="?c=Registro&a=cerrar">Cerrar sesión</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>