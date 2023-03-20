<?php
include_once 'app/Conexion.inc.php';
include_once 'app//Huerta//Huerta.inc.php';
include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app//Huerta//ValidadorRegistroHuerta.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (isset($_POST['enviar'])) {
}

$titulo = 'REGISTRO HUERTA';
include_once './plantilla/documento_declaracion.inc.php';
include_once './plantilla/navbar.inc.php';
?>
<div class="container">
    <div class="textGeneral">
        <h1 class="text-center">HUERTA</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <form role="form" id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="form" style="text-align: center;">
                        <?php
                        if (isset($_POST['enviar'])) {
                            // include_once './plantilla/registro/registro_validado_usuario.inc.php';
                        } else {
                            include_once './plantilla/huerta/registro_vacio_huerta.inc.php';
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