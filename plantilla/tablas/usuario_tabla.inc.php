<?php
Conexion::abrir_conexion();
$usuarios = RepositorioUsuario::obtener_todos_usuario(Conexion::obtener_conexion());
?>
<div class="container">
    <form name="buscador" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="formR">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="grupo">
                        <input type="text" name="buscar" id="buscar" autocomplete="off"><span class="barra"></span>
                        <label for="buscar">BUSCAR USUARIO</label>
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
    $resultado = $objBuscar->buscarUsuario($_POST['buscar'], $num);
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
                                    <th>ESTADO</th>
                                    <th>TIPO</th>
                                    <th>EMAIL</th>
                                </tr>
                            </thead>
                            <?php
                            if ($resultado) {
                                foreach ($resultado as $key => $value) {
                            ?>
                                    <tr>
                                        <td class="table_edit">
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_modificar" value="<?php echo $value['idUsuario']; ?>">
                                                <button type="submit" name="editar_usuario" class="btn btnCargar"><span style=" color:#026873;"><i class="fas fa-user-edit"></i></span></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form class="tablas_botone" method="post" action="">
                                                <input type="hidden" name="id_eliminar" value="<?php echo $value['idUsuario']; ?>">
                                                <button type="submit" id="EliminarUsuario" onclick="eliminar_usuario" name="borrar_usuario" class="btn btnCargar"><span style=" color:#72BF4E;"><i class="fas fa-user-times"></i></span></button>
                                            </form>
                                        </td>
                                        <td style="text-align:left"><?php echo $value['nombreUsuario']; ?></td>
                                        <td style="text-align:left"><?php echo $value['estadoUsuario']; ?></td>
                                        <td style="text-align:left"><?php echo $value['perfilUsuario']; ?></td>
                                        <td style="text-align:left"><?php echo $value['emailUsuario']; ?></td>

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
                                    <th>ESTADO</th>
                                    <th>TIPO</th>
                                    <th>EMAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($usuarios); $i++) {
                                    $usuario_actual = $usuarios[$i];
                                ?>
                                    <tr>
                                        <td class="table_edit">
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_modificar" value="<?php echo $usuario_actual->obtenerId(); ?>">
                                                <button type="submit" name="editar_usuario" class="btn btnCargar"><span style=" color:#026873;"><i class="fas fa-user-edit"></i></span></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form class="tablas_botones" method="post" action="">
                                                <input type="hidden" name="id_eliminar" value="<?php echo $usuario_actual->obtenerId(); ?>">
                                                <button type="submit" id="EliminarUsuario" onclick="eliminar_usuario" name="borrar_usuario" class="btn btnCargar"><span style=" color:#72BF4E;"><i class="fas fa-user-times"></i></span></button>
                                            </form>
                                        </td>
                                        <td style="text-align:left"><?php echo $usuario_actual->obtenerNombre(); ?></td>
                                        <td style="text-align:left"><?php echo $usuario_actual->obtenerEstado(); ?></td>
                                        <td style="text-align:left"><?php echo $usuario_actual->obtenerPerfil(); ?></td>
                                        <td style="text-align:left"><?php echo $usuario_actual->obtenerEmail(); ?></td>
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