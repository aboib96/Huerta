<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app//Usuario//RepositorioUsuario.inc.php';
include_once 'app//Login//ValidarLogin.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesion::sesion_iniciada()) {
    Redireccion::redirigir(SERVIDOR);
}

if (isset($_POST['login'])) {
    Conexion::abrir_conexion();

    $validador = new ValidadorLogin($_POST['usuario'], $_POST['clave'], Conexion::obtener_conexion());

    if (
        $validador->obtener_error() === '' &&
        !is_null($validador->obtener_usuario())
    ) {
        ControlSesion::iniciar_sesion(
            $validador->obtener_usuario()->obtenerId(),
            $validador->obtener_usuario()->obtenerNombre(),
            $validador->obtener_usuario()->obtenerPerfil()
        );
        Redireccion::redirigir(SERVIDOR);
    }

    Conexion::cerrar_conexion();
}
if (isset($_POST['registrar'])) {
    Redireccion::redirigir(RUTA_REGISTRO);
}

$titulo = 'LOGIN';
include_once 'plantilla/documento_declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';
include_once 'app//Usuario//Usuario.inc.php';
?>
<link rel="stylesheet" href="css/login.css">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                                <img src="image/icono.png" style="width: 185px;" alt="logo">
                            </div>

                            <form role="form" id="formLogin" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="grupo">
                                    <input type="text" autocomplete="off" name="usuario" id="usuario" required><span class="barra"></span>
                                    <label for="usuario">USUARIO</label>
                                </div>

                                <div class="grupo">
                                    <input type="password" name="clave" id="clave" required><span class="barra"></span>
                                    <label for="clave">CLAVE</label>
                                </div>

                                <div class="botonRegistro">
                                    <button type="submit" id="btnlogin" name="login" required>
                                        INICIAR SESION
                                    </button>
                                </div>
                                <div>
                                    <?php
                                    if (isset($_POST['login'])) {
                                        $validador->mostrar_error();
                                    }
                                    ?>
                                </div>

                                <br>

                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="mb-0 me-2">NO TIENE UNA CUENTA?</p>
                                </div>
                                <div class="botonRegistro">
                                    <button type="submit" name="registrar"> REGISTRAR </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once './plantilla/documento_cierre.inc.php';
?>