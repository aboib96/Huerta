<?php
Conexion::abrir_conexion();
$huertas = RepositorioHuerta::obtener_todos_huerta(Conexion::obtener_conexion());
?>
<div class="container">
    <form name="buscador" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="formR">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="grupo">
                        <input type="text" name="buscar" id="buscar" autocomplete="off"><span class="barra"></span>
                        <label for="buscar">BUSCAR PLANTA</label>
                    </div>
                    <div class="botonesEnvio">
                        <div class="botonRegistro">
                            <button type="submit" id="btnCarga" class="btn btnCargar" name="buscador">BUSCAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['buscador'])) {

    include_once 'app/Buscador.inc.php';
    Conexion::abrir_conexion();
    $objBuscar = new Buscador();
    $buscar = explode(' ', $_POST['buscar']);
    $num = count($buscar);
    $resultado = $objBuscar->buscarHuerta($_POST['buscar'], $num);
?>
    <div class="container">
        <div class="formTable">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <thead>
                                <tr>
                                    <th>-</th>
                                    <th>-</th>
                                    <th>NOMBRE</th>
                                    <th>TIPO</th>

                                </tr>
                            </thead>
                            <?php
                            if ($resultado) {
                                foreach ($resultado as $key => $value) {
                            ?>
                                    <tr>
                                        <td class="table_edit">
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_modificar" value="<?php echo $value['idCultivo']; ?>">
                                                <button type="submit" name="editar_usuario" class="btn btnCargar"><span style=" color:#026873;"><i class="bi bi-pencil-fill"></i></span></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form class="tablas_botone" method="post" action="">
                                                <input type="hidden" name="id_eliminar" value="<?php echo $value['idCultivo']; ?>">
                                                <button type="submit" id="EliminarHuerta" onclick="eliminar_huerta" name="borrar_huerta" class="btn btnCargar"><span style=" color:#72BF4E;"><i class="bi bi-eraser-fill"></i></span></button>
                                            </form>
                                        </td>
                                        <td style="text-align:left"><?php echo $value['nombreCultivo']; ?></td>
                                        <td style="text-align:left"><?php echo $value['tipoCultivo']; ?></td>


                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">SIN RESULTADO</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php
} else {
?>
    <div class="container">
        <div class="formTable">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <thead>
                                <tr>
                                    <th>-</th>
                                    <th>-</th>
                                    <th>NOMBRE</th>
                                    <th>TIPO</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($huertas); $i++) {
                                    $huerta_actual = $huertas[$i];
                                ?>
                                    <tr>
                                        <td class="table_edit">
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_modificar" value="<?php echo $huerta_actual->obtenerId(); ?>">
                                                <button type="submit" name="editar_huerta" class="btn btnCargar"><span style=" color:#026873;"><i class="bi bi-pencil-fill"></i></span></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_eliminar" value="<?php echo $huerta_actual->obtenerId(); ?>">
                                                <button type="submit" id="EliminarHuerta" onclick="eliminar_huerta" name="borrar_huerta" class="btn btnCargar"><span style=" color:#72BF4E;"><i class="bi bi-eraser-fill"></i></span></button>
                                            </form>
                                        </td>
                                        <td style="text-align:left"><?php echo $huerta_actual->obtenerNombre(); ?></td>
                                        <td style="text-align:left"><?php echo $huerta_actual->obtenerTipo(); ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>