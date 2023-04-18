<?php
include_once 'app/Conexion.inc.php';
include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app//Huerta//Huerta.inc.php';
include_once 'app//Huerta//ValidadorRegistroHuerta.inc.php';
include_once 'app//Huerta//ValidadorHuertaModificado.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';


if (isset($_POST['guardar_cambios_huerta'])) {
    Conexion::abrir_conexion();
    $validador = new ValidadorHuertaModificado($_POST['nombre'].'.png',$_POST['nombre_original'].'.png',$_POST['nombre'].'.jpg',$_POST['nombre_original'].'.jpg',$_POST['nombre'],$_POST['nombre_original'],$_POST['descripcion'],$_POST['descripcion_original'],$_POST['nombreC'],$_POST['cientifico_original'],$_POST['tipo'],$_POST['tipo_original'],$_POST['germina'],$_POST['germinacion_original'],$_POST['cosechar'],$_POST['cosechar_original'],$_POST['temporada'],$_POST['temporada_original'],$_POST['maceta'],$_POST['maceta_original'],$_POST['clima'],$_POST['clima_original'],$_POST['temperaturaMax'],$_POST['temperaturaMax_original'],$_POST['temperaturaMin'],$_POST['temperaturaMin_original'],$_POST['riego'],$_POST['riego_original'],$_POST['luz'],$_POST['luz_original'],$_POST['altura'],$_POST['altura_original'],$_POST['sembrar'],$_POST['sembrar_original'],$_POST['separacion'],$_POST['separacion_original'],$_POST['suelo'],$_POST['suelo_original'],$_POST['ph'],$_POST['ph_original'],$_POST['usuario'],$_POST['usuario_original'],$_POST['fecha'],$_POST['fecha_original'],Conexion::obtener_conexion());

    if (!$validador->getCambios()) {
        Redireccion::redirigir(RUTA_HUERTA_EDITADO);
    } else {
        if ($validador->registro_validado()) {
            $cambio_efectuado = RepositorioHuerta::actualizar_huerta(Conexion::obtener_conexion(), 
                                                                    $_POST['id_huerta'], 
                                                                    $validador->getIcono(), 
                                                                    $validador->getImagen(), 
                                                                    $validador->getNombre(), 
                                                                    $validador->getDescripcion(), 
                                                                    $validador->getCientifico(), 
                                                                    $validador->getGerminacion(), 
                                                                    $validador->getCosecha(), 
                                                                    $validador->getMaceta(), 
                                                                    $validador->getClima(), 
                                                                    $validador->getTemperaturaMax(), 
                                                                    $validador->getTemperaturaMin(), 
                                                                    $validador->getRiego(), 
                                                                    $validador->getLuz(), 
                                                                    $validador->getAltura(), 
                                                                    $validador->getSembrarAlt(), 
                                                                    $validador->getSeparacion(), 
                                                                    $validador->getPh(), 
                                                                    $validador->getTipo(), 
                                                                    $validador->getTemporada(), 
                                                                    $validador->getSuelo(), 
                                                                    $validador->getUsuario(), 
                                                                    $validador->getFecha()
                                                                );
            if ($cambio_efectuado) {
                Redireccion::redirigir(RUTA_HUERTA_EDITADO);
            }
        }
    }
    Conexion::cerrar_conexion();
} elseif (isset($_POST['borrar_huerta'])) {
    Conexion::abrir_conexion();
    $eliminar_huerta = RepositorioHuerta::eliminar_huerta(Conexion::obtener_conexion(), $_POST['id_eliminar']);
    Conexion::cerrar_conexion();
    if ($eliminar_huerta) {
        Redireccion::redirigir(RUTA_HUERTA_EDITADO);
    }
}
$titulo = "EDITAR HUERTA";

include_once 'plantilla/documento_declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';
?>
<div class="container">
    <div class="textTable">
        <h1 class="text-center">GESTIONAR HUERTA</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <form role="form" id="formHuertaEditado" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form" style="text-align: center;">
                    <?php
                    if (!isset($_POST['editar_huerta']) && !isset($_POST['guardar_cambios_huerta'])) {
                        include_once './plantilla/tablas/huerta_tabla.inc.php';
                    }
                    if (isset($_POST['editar_huerta'])) {
                        Conexion::abrir_conexion();
                        $id_huerta = $_POST['id_modificar'];
                        $huerta_recuperada = RepositorioHuerta::obtener_huerta_id(Conexion::obtener_conexion(), $id_huerta);
                        include_once 'plantilla//huerta//huerta_recuperado.inc.php';
                        Conexion::cerrar_conexion();
                    }
                    if (isset($_POST['guardar_cambios_huerta'])) {
                        Conexion::abrir_conexion();
                        $id_huerta = $_POST['id_huerta'];
                        $huerta_recuperada = RepositorioHuerta::obtener_huerta_id(Conexion::obtener_conexion(), $id_huerta);
                        include_once 'plantilla//huerta//huerta_validado_recuperado.inc.php';
                        Conexion::cerrar_conexion();
                    }
                    if (isset($_POST['anular'])) {
                        include_once './plantilla/tablas/huerta_tabla.inc.php';
                    }
                    ?>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
<?php
include_once './plantilla//documento_cierre.inc.php';
?>