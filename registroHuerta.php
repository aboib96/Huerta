<?php
include_once 'app/Conexion.inc.php';
include_once 'app//Huerta//Huerta.inc.php';
include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app//Huerta//ValidadorRegistroHuerta.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (isset($_POST['enviar'])) {

    Conexion::abrir_conexion();

        $validador = new ValidadorRegistroHuerta(
                                                $_POST['nombre'].'.inc.php',  
                                                $_POST['nombre'], 
                                                $_POST['nombre'], 
                                                $_POST['descripcion'], 
                                                $_POST['nombreC'], 
                                                $_POST['tipo'], 
                                                $_POST['germina'],  
                                                $_POST['cosechar'],
                                                $_POST['temporada'],
                                                $_POST['maceta'], 
                                                $_POST['clima'], 
                                                $_POST['temperaturaMax'], 
                                                $_POST['temperaturaMin'], 
                                                $_POST['riego'],  
                                                $_POST['luz'], 
                                                $_POST['altura'], 
                                                $_POST['sembrar'], 
                                                $_POST['separacion'], 
                                                $_POST['suelo'], 
                                                $_POST['ph'],  
                                                $_POST['usuario'], 
                                                $_POST['fecha'], 
                                                Conexion::obtener_conexion());

        if ($validador->registro_validado()) {

            $huerta = new Huerta(
                '',
                $validador->getIcono(),
                $validador->getImagen(),
                $validador->getNombre(),
                $validador->getDescripcion(),
                $validador->getCientifico(),
                $validador->getTipo(),
                $validador->getGerminacion(),
                $validador->getCosecha(),
                $validador->getTemporada(),
                $validador->getMaceta(),
                $validador->getClima(),
                $validador->getTemperaturaMax(),
                $validador->getTemperaturaMin(),
                $validador->getRiego(),
                $validador->getLuz(),
                $validador->getAltura(),
                $validador->getSembrarAlt(),
                $validador->getSeparacion(),
                $validador->getSuelo(),
                $validador->getPh(),
                $validador->getUsuario(),
                $validador->getFecha()
            );
            $huerta_insertado = RepositorioHuerta::insertar_huerta(Conexion::obtener_conexion(), $huerta);

            if ($huerta_insertado) {
                Redireccion::redirigir(RUTA_REGISTRO_HUERTA);
            }
        }

    Conexion::cerrar_conexion();
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
                            include_once './plantilla/huerta/registro_validado_huerta.inc.php';
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