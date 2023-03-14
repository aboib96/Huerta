<div class="container">
    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
    <form action="" method="POST" id="form">
        <div class="formR">
            <div class="grupo">
                <input type="text" name="nombre" id="name" required value="<?php echo $usuario_recuperado->obtenerNombre(); ?>"><span class="barra"></span>
                <label for="nombre">NOMBRE</label>
                <input type="hidden" id="nombre_original" name="nombre_original" value="<?php echo $usuario_recuperado->obtenerNombre(); ?>">
            </div>
            <div class="grupo">
                <input type="text" name="email" id="email" required value="<?php echo $usuario_recuperado->obtenerEmail(); ?>"><span class="barra"></span>
                <label for="email">EMAIL</label>
                <input type="hidden" id="email_original" name="email_original" value="<?php echo $usuario_recuperado->obtenerEmail(); ?>">
            </div>
            <div class="grupo">
                <?php
                if ($usuario_recuperado->obtenerEstado() === "activo") {
                ?>
                    <div class="select">
                        <select name="estado" id="estado">
                            <option value="">ESTADO</option>
                            <option value="activo" selected>ACTIVO</option>
                            <option value="inactivo">INACTIVO</option>
                        </select>
                    </div>
                <?php
                } else {
                ?>
                    <div class="select">
                        <select name="estado" id="estado">
                            <option value="">ESTADO</option>
                            <option value="activo">ACTIVO</option>
                            <option value="inactivo" selected>INACTIVO</option>
                        </select>
                    </div>
                <?php
                }
                ?>
                <input type="hidden" id="estado_original" name="estado_original" value="<?php echo $usuario_recuperado->obtenerEstado(); ?>">
            </div>

            <div class="grupo">
                <?php
                if ($usuario_recuperado->obtenerPerfil() === "administrador") {
                ?>
                    <div class="select">
                        <select name="tipo" id="tipo">
                            <option value="">PERFIL</option>
                            <option value="administrador" selected>ADMINISTRADOR</option>
                            <option value="usuario">USUARIO</option>
                        </select>
                    </div>
                <?php
                } else {
                ?>
                    <div class="select">
                        <select name="tipo" id="tipo">
                            <option value="">PERFIL</option>
                            <option value="administrador">ADMINISTRADOR</option>
                            <option value="usuario" selected>USUARIO</option>
                        </select>
                    </div>
                <?php
                }
                ?>
                <input type="hidden" id="tipo_original" name="tipo_original" value="<?php echo $usuario_recuperado->obtenerPerfil(); ?>">
            </div>


            <div class="botonRegistro">
                <button type="submit" class="btn btnLimpiar" name="anular">ANULAR</button>
            </div>

            <div class="botonRegistro">
                <button type="submit" id="guardar_cambios_usuario" class="btn btnCargar" name="guardar_cambios_usuario">ENVIAR</button>
            </div>
        </div>
    </form>
</div>