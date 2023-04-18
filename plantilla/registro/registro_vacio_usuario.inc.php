<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="nombre" id="name"><span class="barra"></span>
            <label for="nombre">NOMBRE <i class="bi bi-people-fill"></i></label>
        </div>
        <div class="grupo">
            <input type="password" name="clave" id="clave" ><span class="barra"></span>
            <label for="clave">CLAVE <i class="bi bi-key-fill"></i></label>
        </div>
        <div class="grupo">
            <input type="password" name="clave2" id="clave2" ><span class="barra"></span>
            <label for="clave2">REPITE LA CLAVE <i class="bi bi-key-fill"></i></label>
        </div>
        <div class="grupo">
            <input type="text" name="email" id="email" ><span class="barra"></span>
            <label for="email">EMAIL <i class="bi bi-envelope-fill"></i></label>
        </div>

        <?php
        if (ControlSesion::sesion_iniciada()) {
        ?>
            <div class="grupo">
                <div class="select">
                    <select name="estado" id="estado">
                        <option value="">ESTADO</option>
                        <option value="activo">ACTIVO</option>
                        <option value="inactivo">INACTIVO</option>
                    </select>
                </div>
            </div>

            <div class="grupo">
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">PERFIL</option>
                        <option value="administrador">ADMINISTRADOR</option>
                        <option value="usuario">USUARIO</option>
                    </select>
                </div>
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