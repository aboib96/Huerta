<?php
include_once 'app/Conexion.inc.php';
include_once 'app//Usuario//Usuario.inc.php';
include_once 'app//Usuario//RepositorioUsuario.inc.php';
include_once 'app//Usuario//ValidadorRegistroUsuario.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (isset($_POST['enviar'])) {
    Conexion::abrir_conexion();

    if (ControlSesion::sesion_iniciada()) {
        $validador = new ValidadorRegistro($_POST['nombre'], $_POST['clave'], $_POST['clave2'], $_POST['email'], $_POST['estado'], $_POST['tipo'], Conexion::obtener_conexion());

        if ($validador->registro_validado()) {
            $usuario = new Usuario(
                '',
                $validador->getNombre(),
                password_hash($validador->getClave(), PASSWORD_DEFAULT),
                $validador->getEmail(),
                $validador->getEstado(),
                $validador->getTipo()
            );
            $usuario_insertado = RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);

            if ($usuario_insertado) {
                Redireccion::redirigir(RUTA_REGISTRO);
            }
        }
    } else {
        $validador = new ValidadorRegistro($_POST['nombre'], $_POST['clave'], $_POST['clave2'], $_POST['email'], 'inactivo', 'usuario', Conexion::obtener_conexion());

        if ($validador->registro_validado()) {
            $usuario = new Usuario(
                '',
                $validador->getNombre(),
                password_hash($validador->getClave(), PASSWORD_DEFAULT),
                $validador->getEmail(),
                $validador->getEstado(),
                $validador->getTipo()
            );
            $usuario_insertado = RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);

            if ($usuario_insertado) {
                Redireccion::redirigir(RUTA_REGISTRO);
            }
        }
    }

    Conexion::cerrar_conexion();
}

$titulo = 'REGISTRO';
include_once './plantilla/documento_declaracion.inc.php';
include_once './plantilla/navbar.inc.php';
?>
<div class="container">
    <div class="textGeneral">
        <h1 class="text-center">USUARIOS</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- <div class="col-md-4 form-image">
            <img src="./fondo//fondoRegistro.svg" alt="">
        </div> -->

        <div class="col-md-12">
            <div class="panel-body">
                <form role="form" id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="form" style="text-align: center;">
                        <?php
                        if (isset($_POST['enviar'])) {
                            include_once './plantilla/registro/registro_validado_usuario.inc.php';
                        } else {
                            include_once './plantilla/registro/registro_vacio_usuario.inc.php';
                        }
                        ?>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>

<?php
include_once './plantilla//documento_cierre.inc.php';
?>