<!-- <nav class="navbar navbar-expand-lg py-3 ">
    <div class="pe-lg-0 ps-lg-5 container-fluid justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="image/icono.png" height="100" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="nav_left d-lg-flex align-items-center">
                <nav>
                    <div class="nav d-block d-lg-flex nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
                        <button class="nav-link" id="timing-tab" data-bs-toggle="tab" data-bs-target="#timing" type="button" role="tab" aria-controls="timing" aria-selected="false">Timing</button>
                        <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses" type="button" role="tab" aria-controls="courses" aria-selected="false">Courses</button>
                    </div>
                </nav>
                <div class="position-relative d-inline-block me-lg-4">
                    <input class="search_input ms-5 mb-3 mb-lg-0 ms-lg-0 pe-5 ps-3" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
    </div>
</nav> -->
<?php
include_once 'app/config.inc.php';
include_once 'app/ControlSesion.inc.php';
?>

<?php
if (ControlSesion::sesion_iniciada()) {
?>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #f2f2f2;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="image/icono.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
      </a>
      <a class="navbar-brand" href="<?php echo SERVIDOR; ?>">TU HUERTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_REGISTRO_HUERTA; ?>">HUERTA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_REGISTRO; ?>">REGISTRO</a>
          </li>
        </ul>
        <ul class="navbar-nav nav_right">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_HUERTA_EDITADO; ?>">EDITAR HUERTA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_REGISTRO_EDITADO; ?>">EDITAR USUARIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_LOGOUT; ?>">SALIR <i class="bi bi-x-circle-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
} else {
?>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f2f2;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="image/icono.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
      </a>
      <a class="navbar-brand" href="<?php echo SERVIDOR; ?>">TU HUERTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav nav_right">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_LOGIN; ?>">INICIAR SESIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo RUTA_REGISTRO; ?>">REGISTRO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}
?>