<?php
$titulo = 'TU HUERTA';
include_once './plantilla/documento_declaracion.inc.php';
include_once './plantilla/navbar.inc.php';
include_once './/app//huertaCompleta.inc.php';
?>

<?php
if (!ControlSesion::sesion_iniciada()) {
?>
  <div class="splash">
    <img class="imgsplash" src="image/icono.png">
  </div>
<?php
}
?>


<div class="container">
  <?php
        Conexion :: abrir_conexion();
        huertaCompleta::huerta_completa();
        Conexion :: cerrar_conexion();
  ?>
</div>


<?php
include_once './plantilla/documento_cierre.inc.php';
?>