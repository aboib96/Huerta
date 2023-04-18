<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="nombre" id="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();"><span class="barra"></span>
            <label for="nombre">NOMBRE</label>
        </div>
        <div class="grupo">
            <textarea name="descripcion" id="descripcion" cols="10" rows="5" maxlength="500"></textarea><span class="barra"></span>
            <label for="descripcion">DESCRIPCIÓN</label>
            <div class="contador" id="contador">0/500</div>
        </div>
        <div class="grupo">
            <input type="text" name="nombreC" id="nombreC"><span class="barra"></span>
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
            <input type="number" name="germina" id="germina"><span class="barra"></span>
            <label for="germina">TIEMPO DE GERMINACIÓN - "EN DIAS"</label>
        </div>
        <div class="grupo">
            <input type="number" name="cosechar" id="cosechar"><span class="barra"></span>
            <label for="cosechar">COSECHARSE - "EN DIAS"</label>
        </div>
        <div class="grupo">
            <div class="select">
                <select name="temporada" id="temporada">
                    <option value="">SELECCIONE UNA TEMPORADA</option>
                    <option value="verano">VERANO</option>
                    <option value="otoño">OTOÑO</option>
                    <option value="invierno">INVIERNO</option>
                    <option value="primavera">PRIMAVERA</option>
                </select>
            </div>
        </div>
        <div class="grupo">
            <input type="number" name="maceta" id="maceta"><span class="barra"></span>
            <label for="maceta">TAMAÑO DE MACETA - "EN LITROS"</label>
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
            <input type="number" name="temperaturaMax" id="temperaturaMax"><span class="barra"></span>
            <label for="temperaturaMax">TEMPERATURA MÁXIMA</label>
        </div>
        <div class="grupo">
            <input type="number" name="temperaturaMin" id="temperaturaMin"><span class="barra"></span>
            <label for="temperaturaMin">TEMPERATURA MÍNIMA</label>
        </div>
        <div class="grupo">
            <input type="text" name="riego" id="riego"><span class="barra"></span>
            <label for="riego">CANTIDAD DE RIEGO</label>
        </div>
        <div class="grupo">
            <input type="text" name="luz" id="luz"><span class="barra"></span>
            <label for="luz">CANTIDAD DE LUZ SOLAR</label>
        </div>
        <div class="grupo">
            <input type="number" name="altura" id="altura"><span class="barra"></span>
            <label for="altura">ALTURA DEL CULTIVO - "EN CM"</label>
        </div>
        <div class="grupo">
            <input type="number" name="sembrar" id="sembrar"><span class="barra"></span>
            <label for="sembrar">PROFUNDIDAD DE SIEMBRA - "EN CM"</label>
        </div>
        <div class="grupo">
            <input type="number" name="separacion" id="separacion"><span class="barra"></span>
            <label for="separacion">SEPARACIÓN DEL CULTIVO - "EN CM"</label>
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
            <input type="text" name="ph" id="ph"><span class="barra"></span>
            <label for="ph">PH DEL SUELO</label>
        </div>

        <div class="grupo">
            <input type="hidden" name="usuario" id="usuario" value="<?php echo '' . $_SESSION['nombre_usuario']; ?>" readonly="readonly"><span class="barra"></span>
        </div>

        <div class="grupo">
            <input type="hidden" name="fecha" id="fecha" value="<?php echo '' . date('d/m/Y H:i:s'); ?>" readonly="readonly"><span class="barra"></span>
        </div>
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