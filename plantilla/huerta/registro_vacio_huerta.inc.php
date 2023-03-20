<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="icono" id="icono" required><span class="barra"></span>
            <label for="icono">ICONO</label>
        </div>
        <div class="grupo">
            <input type="text" name="imagen" id="imagen" required><span class="barra"></span>
            <label for="imagen">IMAGEN</label>
        </div>
        <div class="grupo">
            <input type="text" name="nombre" id="nombre" required><span class="barra"></span>
            <label for="nombre">NOMBRE</label>
        </div>
        <div class="grupo">
            <textarea name="descripcion" id=descripcion"" cols="10" rows="5"></textarea><span class="barra"></span>
            <label for="descripcion">DESCRIPCIÓN</label>
        </div>
        <div class="grupo">
            <input type="text" name="nombreC" id="nombreC" required><span class="barra"></span>
            <label for="nombreC">NOMBRE CIENTIFICO</label>
        </div>
        <div class="grupo">
            <div class="select">
                <select name="tipo" id="tipo">
                    <option value="">SELECCIONE UN TIPO</option>
                    <option value="frutales">FRUTALES </option>
                    <option value="vegetales">VEGETALES </option>
                    <option value="aromaticas">AROMÁTICAS </option>
                    <option value="flores">FLORES </option>
                    <option value="especias">ESPECIAS </option>
                    <option value="suculentas">SUCULENTAS </option>
                </select>
            </div>
        </div>
        <div class="grupo">
            <input type="number" name="germina" id="germina" required><span class="barra"></span>
            <label for="germina">TIEMPO DE GERMINACIÓN</label>
        </div>
        <div class="grupo">
            <input type="number" name="cosechar" id="cosechar" required><span class="barra"></span>
            <label for="cosechar">TIEMPO DE COSECHA</label>
        </div>
        <div class="grupo">
            <input type="number" name="maceta" id="maceta" required><span class="barra"></span>
            <label for="maceta">TAMAÑO DE MACETA</label>
        </div>
        <div class="grupo">
            <div class="select">
                <select name="clima" id="clima">
                    <option value="">SELECCIONE UN CLIMA</option>
                    <option value="calido">CALIDO</option>
                    <option value="templado">TEMPLADO</option>
                    <option value="frio">FRIO</option>
                </select>
            </div>
        </div>
        <div class="grupo">
            <input type="number" name="temperaturaMax" id="temperaturaMax" required><span class="barra"></span>
            <label for="temperaturaMax">TEMPERATURA MÁXIMA</label>
        </div>
        <div class="grupo">
            <input type="number" name="temperaturaMin" id="temperaturaMin" required><span class="barra"></span>
            <label for="temperaturaMin">TEMPERATURA MÍNIMA</label>
        </div>
        <div class="grupo">
            <input type="text" name="riego" id="riego" required><span class="barra"></span>
            <label for="riego">RIEGO</label>
        </div>
        <div class="grupo">
            <input type="text" name="luz" id="luz" required><span class="barra"></span>
            <label for="luz">LUZ SOLAR</label>
        </div>
        <div class="grupo">
            <input type="number" name="altura" id="altura" required><span class="barra"></span>
            <label for="altura">ALTURA DEL CULTIVO</label>
        </div>
        <div class="grupo">
            <input type="number" name="sembrar" id="sembrar" required><span class="barra"></span>
            <label for="sembrar">PROFUNDIDAD DE SIEMBRA</label>
        </div>
        <div class="grupo">
            <input type="number" name="separacion" id="separacion" required><span class="barra"></span>
            <label for="separacion">SEPARACIÓN</label>
        </div>
        <div class="grupo">
            <div class="select">
                <select name="suelo" id="suelo">
                    <option value="">SELECCIONE UN SUELO</option>
                    <option value="arenoso">ARENOSO</option>
                    <option value="arcilloso">ARCILLOSO</option>
                    <option value="calcareo">CALCÁREO</option>
                    <option value="franco">FRANCO</option>
                    <option value="limoso">LIMOSO</option>
                </select>
            </div>
        </div>
        <div class="grupo">
            <input type="text" name="ph" id="ph" required><span class="barra"></span>
            <label for="ph">PH DEL SUELO</label>
        </div>

        <div class="grupo">
            <input type="hidden" name="usuario" id="usuario" value="<?php echo '' . $_SESSION['nombre_usuario']; ?>" readonly="readonly"><span class="barra"></span>
        </div>

        <div class="grupo">
            <input type="hidden" name="fecha" id="fecha" value="<?php echo '' . date('d/m/Y H:i:s'); ?>" readonly="readonly"><span class="barra"></span>
        </div>

        <div class="botonRegistro">
            <button type="submit" name="enviar">ENVIAR</button>
        </div>

        <div class="botonRegistro">
            <button type="reset">RESTAURAR</button>
        </div>

    </div>
</form>