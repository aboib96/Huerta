<form action="" method="POST" id="form">
    <div class="formR">
        <div class="grupo">
            <input type="text" name="nombre" id="nombre" required <?php $validador->mostrar_nombre() ?> onkeyup="javascript:this.value=this.value.toUpperCase();"><span class="barra"></span>
            <label for="nombre">NOMBRE</label>
            <?php
            $validador->mostrar_error_nombre();
            ?>
        </div>
        <div class="grupo">
            <textarea name="descripcion" id=descripcion"" cols="10" rows="5"><?php $validador->mostrar_descripcion() ?></textarea><span class="barra"></span>
            <label for="descripcion">DESCRIPCIÓN</label>
            <?php
            $validador->mostrar_error_descripcion();
            ?>
        </div>
        <div class="grupo">
            <input type="text" name="nombreC" id="nombreC" required <?php $validador->mostrar_cientifico() ?>><span class="barra"></span>
            <label for="nombreC">NOMBRE CIENTIFICO</label>
            <?php
            $validador->mostrar_error_cientifico();
            ?>
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
            <?php
            $validador->mostrar_error_tipo();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="germina" id="germina" required <?php $validador->mostrar_germinacion() ?>><span class="barra"></span>
            <label for="germina">TIEMPO DE GERMINACIÓN</label>
            <?php
            $validador->mostrar_error_germinacion();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="cosechar" id="cosechar" required  <?php $validador->mostrar_cosecha() ?>><span class="barra"></span>
            <label for="cosechar">TIEMPO DE COSECHA</label>
            <?php
            $validador->mostrar_error_cosecha();
            ?>
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
            <?php
            $validador->mostrar_error_temporada();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="maceta" id="maceta" required  <?php $validador->mostrar_maceta() ?>><span class="barra"></span>
            <label for="maceta">TAMAÑO DE MACETA</label>
            <?php
            $validador->mostrar_error_maceta();
            ?>
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
            <?php
            $validador->mostrar_error_clima();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="temperaturaMax" id="temperaturaMax" required <?php $validador->mostrar_temperaturaMax() ?>><span class="barra"></span>
            <label for="temperaturaMax">TEMPERATURA MÁXIMA</label>
            <?php
            $validador->mostrar_error_temperaturaMax();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="temperaturaMin" id="temperaturaMin" required <?php $validador->mostrar_temperaturaMin() ?>><span class="barra"></span>
            <label for="temperaturaMin">TEMPERATURA MÍNIMA</label>
            <?php
            $validador->mostrar_error_temperaturaMin();
            ?>
        </div>
        <div class="grupo">
            <input type="text" name="riego" id="riego" required <?php $validador->mostrar_riego() ?>><span class="barra"></span>
            <label for="riego">RIEGO</label>
            <?php
            $validador->mostrar_error_riego();
            ?>
        </div>
        <div class="grupo">
            <input type="text" name="luz" id="luz" required <?php $validador->mostrar_luz() ?>><span class="barra"></span>
            <label for="luz">LUZ SOLAR</label>
            <?php
            $validador->mostrar_error_luz();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="altura" id="altura" required <?php $validador->mostrar_altura() ?>><span class="barra"></span>
            <label for="altura">ALTURA DEL CULTIVO</label>
            <?php
            $validador->mostrar_error_altura();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="sembrar" id="sembrar" required <?php $validador->mostrar_sembrarAlt() ?>><span class="barra"></span>
            <label for="sembrar">PROFUNDIDAD DE SIEMBRA</label>
            <?php
            $validador->mostrar_error_sembrarAlt();
            ?>
        </div>
        <div class="grupo">
            <input type="number" name="separacion" id="separacion" required <?php $validador->mostrar_separacion() ?>><span class="barra"></span>
            <label for="separacion">SEPARACIÓN</label>
            <?php
            $validador->mostrar_error_separacion();
            ?>
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
            <?php
            $validador->mostrar_error_suelo();
            ?>
        </div>
        <div class="grupo">
            <input type="text" name="ph" id="ph" required <?php $validador->mostrar_ph() ?>><span class="barra"></span>
            <label for="ph">PH DEL SUELO</label>
            <?php
            $validador->mostrar_error_ph();
            ?>
        </div>

        <div class="grupo">
            <input type="hidden" name="usuario" id="usuario" value="<?php echo '' . $_SESSION['nombre_usuario']; ?>" readonly="readonly"><span class="barra"></span>
            <?php
            $validador->mostrar_error_usuario();
            ?>
        </div>

        <div class="grupo">
            <input type="hidden" name="fecha" id="fecha" value="<?php echo '' . date('d/m/Y H:i:s'); ?>" readonly="readonly"><span class="barra"></span>
            <?php
            $validador->mostrar_error_fecha();
            ?>
        </div>

        <div class="botonesEnvio">
            <div class="botonRegistro">
                <button type="submit" name="enviar">ENVIAR</button>
            </div>

            <div class="botonRegistro">
                <button type="reset">RESTAURAR</button>
            </div>
        </div>

    </div>
</form>