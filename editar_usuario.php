<?php
include_once 'app/Conexion.inc.php';
include_once 'app//Usuario//RepositorioUsuario.inc.php';
include_once 'app//Usuario//Usuario.inc.php';
include_once 'app//Usuario//ValidadorRegistroUsuario.inc.php';
include_once 'app//Usuario//ValidadorUsuarioModificado.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';


if(isset($_POST['guardar_cambios_usuario'])){
	Conexion::abrir_conexion();
	$validador = new ValidadorUsuarioModificado($_POST['nombre'], $_POST['nombre_original'], $_POST['email'], $_POST['email_original'], $_POST['estado'], $_POST['estado_original'], $_POST['tipo'], $_POST['tipo_original'], Conexion::obtener_conexion());

	if (!$validador->getCambios()) {
        Redireccion::redirigir(RUTA_REGISTRO_EDITADO);
    }else {
        if ($validador->registro_validado_mod()) {
            $cambio_efectuado = RepositorioUsuario :: actualizar_usuario(Conexion :: obtener_conexion(), $_POST['id_usuario'], $validador->getNombre(), $validador->getEmail(), $validador->getEstado(), $validador->getTipo());

        	if($cambio_efectuado){
        	Redireccion::redirigir(RUTA_REGISTRO_EDITADO);
    		}
        }
    }
    Conexion::cerrar_conexion();
}elseif (isset($_POST['borrar_usuario'])) {
    Conexion :: abrir_conexion();
    $id_borrar = $_POST['id_eliminar'];
    $eliminar_usuario = RepositorioUsuario :: eliminar_usuario(Conexion :: obtener_conexion(), $id_borrar);
    Conexion::cerrar_conexion();
    if ($eliminar_usuario) {
        Redireccion::redirigir(RUTA_REGISTRO_EDITADO);
    }
}
$titulo = "EDITAR USUARIOS";

include_once 'plantilla/documento_declaracion.inc.php';
include_once 'plantilla/navbar.inc.php';
?>
<div class="container">
    <div class="textTable">
        <h1 class="text-center">GESTIONAR USUARIOS</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <form role="form" id="formUsuarioEditado" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form" style="text-align: center;">
                    <?php
                    if (!isset($_POST['editar_usuario']) && !isset($_POST['guardar_cambios_usuario'])) {
                        include_once './plantilla/tablas/usuario_tabla.inc.php';
                    }
                    if (isset($_POST['editar_usuario'])) {
                        Conexion::abrir_conexion();
                        $id_usuario = $_POST['id_modificar'];
                        $usuario_recuperado = RepositorioUsuario::obtener_usuario_id(Conexion::obtener_conexion(), $id_usuario);
                        include_once 'plantilla//registro//usuario_recuperado.inc.php';
                        Conexion::cerrar_conexion();
                    }
                    if (isset($_POST['guardar_cambios_usuario'])) {
                        Conexion::abrir_conexion();
                    	$id_usuario = $_POST['id_usuario'];
                    	$usuario_recuperado = RepositorioUsuario::obtener_usuario_id(Conexion::obtener_conexion(),$id_usuario);
                    	include_once 'plantilla//registro//usuario_validado_recuperado.inc.php';
                    	Conexion::cerrar_conexion();
                    }
                    if(isset($_POST['anular'])) {
                        include_once './plantilla/tablas/usuario_tabla.inc.php';
                    }
                    // 
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