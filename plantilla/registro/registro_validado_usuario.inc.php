<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="nombre" id="name" <?php $validador->mostrar_nombre() ?>><span class="barra"></span>
            <label for="nombre">NOMBRE <i class="bi bi-people-fill"></i></label>
            <?php
            $validador->mostrar_error_nombre();
            ?>
        </div>
        <div class="grupo">
            <input type="password" name="clave" id="clave"><span class="barra"></span>
            <label for="clave">CLAVE  <i class="bi bi-key-fill"></i></label>
            <?php
            $validador->mostrar_error_clave();
            ?>
        </div>
        <div class="grupo">
            <input type="password" name="clave2" id="clave2"><span class="barra"></span>
            <label for="clave2">REPITE LA CLAVE  <i class="bi bi-key-fill"></i></label>
            <?php
            $validador->mostrar_error_clave2();
            ?>
        </div>
        <div class="grupo">
            <input type="text" name="email" id="email" <?php $validador->mostrar_email() ?>><span class="barra"></span>
            <label for="email">EMAIL <i class="bi bi-envelope-fill"></i></label>
            <?php
            $validador->mostrar_error_email();
            ?>
        </div>

        <?php
        if (ControlSesion::sesion_iniciada()) {
        ?>
            <div class="grupo">
                <?php
                if ($_POST['estado'] === "activo") {
                ?>
                    <div class="select">
                        <select name="estado" id="estado">
                            <option value="">ESTADO</option>
                            <option value="activo" selected>ACTIVO</option>
                            <option value="inactivo">INACTIVO</option>
                        </select>
                    </div>
                <?php
                } elseif ($_POST['estado'] === "inactivo") {
                ?>
                    <div class="select">
                        <select name="estado" id="estado">
                            <option value="">ESTADO</option>
                            <option value="activo">ACTIVO</option>
                            <option value="inactivo" selected>INACTIVO</option>
                        </select>
                    </div>
                <?php
                } else {
                ?>
                    <div class="select">
                        <select name="estado" id="estado">
                            <option value="" selected>ESTADO</option>
                            <option value="activo">ACTIVO</option>
                            <option value="inactivo">INACTIVO</option>
                        </select>
                    </div>
                <?php
                }
                ?>
                <?php
                $validador->mostrar_error_estado();
                ?>
            </div>

            <div class="grupo">
                <?php
                if ($_POST['tipo'] === "administrador") {
                ?>
                    <div class="select">
                        <select name="tipo" id="tipo">
                            <option value="">PERFIL</option>
                            <option value="administrador" selected>ADMINISTRADOR</option>
                            <option value="usuario">USUARIO</option>
                        </select>
                    </div>
                <?php
                } elseif ($_POST['tipo'] === "usuario") {
                ?>
                    <div class="select">
                        <select name="tipo" id="tipo">
                            <option value="">PERFIL</option>
                            <option value="administrador">ADMINISTRADOR</option>
                            <option value="usuario" selected>USUARIO</option>
                        </select>
                    </div>
                <?php
                } else {
                ?>
                    <div class="select">
                        <select name="tipo" id="tipo">
                            <option value="" selected>PERFIL</option>
                            <option value="administrador">ADMINISTRADOR</option>
                            <option value="usuario">USUARIO</option>
                        </select>
                    </div>
                <?php
                }
                ?>
                <?php
                $validador->mostrar_error_tipo();
                ?>
            </div>
        <?php
        }
        ?>

        <div class="botonesEnvio">
            <div class="botonRegistro">
                <button type="submit" name="enviar">ENVIAR</button>
            </div>

            <div class="botonCancelar">
                <button type="button" name="cancelar"><a class="navbar-brand" href="<?php echo SERVIDOR; ?>">CANCELAR</a></button>
            </div>
        </div>

    </div>
</form>