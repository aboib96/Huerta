<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="nombre" id="name" required><span class="barra"></span>
            <label for="nombre">NOMBRE</label>
        </div>
        <div class="grupo">
            <input type="password" name="clave" id="clave" required><span class="barra"></span>
            <label for="clave">CLAVE</label>
        </div>
        <div class="grupo">
            <input type="password" name="clave2" id="clave2" required><span class="barra"></span>
            <label for="clave2">REPITE LA CLAVE</label>
        </div>
        <div class="grupo">
            <input type="text" name="email" id="email" required><span class="barra"></span>
            <label for="email">EMAIL</label>
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
        <div class="botonRegistro">
            <button type="reset">RESTAURAR</button>
        </div>

        <div class="botonRegistro">
            <button type="submit" name="enviar">ENVIAR</button>
        </div>
    </div>
</form>