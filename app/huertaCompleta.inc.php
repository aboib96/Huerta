<?php
include_once 'app//Huerta//Huerta.inc.php';
include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';



class huertaCompleta
{
    public static function huerta_completa()
    {
        $huertas = RepositorioHuerta::obtener_todos_huert_ordenado(Conexion::obtener_conexion());
        if (count($huertas)) {
            foreach ($huertas as $huerta) {
                self::huertaMostrar($huerta);
            }
        }
    }
    public static function huertaMostrar($huerta)
    {
        if (!isset($huerta)) {
            return;
        }
?>
        <div class="container">
            <div class="row pt-2">
                <form role="form" id="form" class="principal" method="get" action="<?php echo DETALLE ?>">
                    <div class="col-md-12 col-lg-12 pb-3">
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img" style="background-image: url(image//jpg//<?php echo $huerta->obtenerImagen(); ?>);"></div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="image//png//<?php echo $huerta->obtenerIcono(); ?>" alt="Avatar" />
                            </div>
                            <div class="card-body" style="overflow-y: auto">
                                <div class="titleCard">
                                    <h4 class="card-title"><?php echo $huerta->obtenerNombre(); ?></h4>
                                </div>

                                <p class="card-text"><?php echo $huerta->obtenerDescripcion(); ?> <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks" target="_blank"></p>
                            </div>
                            <div class="botonCards"">

                                <a href=" #" class="botonCard">DETALLES</a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php
    }
}
?>