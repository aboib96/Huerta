<form action="" method="POST" id="form">
    <div class="formR">

        <div class="grupo">
            <input type="text" name="nombre" id="nombre" <?php $validador->mostrar_nombre() ?> onkeyup="javascript:this.value=this.value.toUpperCase();"><span class="barra"></span>
            <label for="nombre">NOMBRE</label>
            <?php
            $validador->mostrar_error_nombre();
            ?>
        </div>

        <div class="grupo">
            <textarea name="descripcion" id="descripcion" cols="10" rows="5" maxlength="500"><?php $validador->mostrar_descripcion() ?></textarea><span class="barra"></span>
            <label for="descripcion">DESCRIPCIÓN</label>
            <div class="contador" id="contador">0/500</div>
            <?php
            $validador->mostrar_error_descripcion();
            ?>
        </div>

        <div class="grupo">
            <input type="text" name="nombreC" id="nombreC" <?php $validador->mostrar_cientifico() ?>><span class="barra"></span>
            <label for="nombreC">NOMBRE CIENTIFICO</label>
            <?php
            $validador->mostrar_error_cientifico();
            ?>
        </div>

        <div class="grupo">
            <?php
            if ($_POST['tipo'] === "frutales") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales" selected>FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['tipo'] === "vegetales") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales" selected>VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['tipo'] === "aromaticas") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas" selected>AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['tipo'] === "flores") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores" selected>FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['tipo'] === "especias") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias" selected>ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['tipo'] === "suculentas") {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="">SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas" selected>SUCULENTAS </option>
                    </select>
                </div>
            <?php
            } else {
            ?>
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="" selected>SELECCIONE UN TIPO</option>
                        <option value="frutales">FRUTALES </option>
                        <option value="vegetales">VEGETALES </option>
                        <option value="aromaticas">AROMÁTICAS </option>
                        <option value="flores">FLORES </option>
                        <option value="especias">ESPECIAS </option>
                        <option value="suculentas">SUCULENTAS </option>
                    </select>
                </div>
            <?php
            }
            ?>
            <?php
            $validador->mostrar_error_tipo();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="germina" id="germina" <?php $validador->mostrar_germinacion() ?> ><span class="barra"></span>
            <label for="germina">TIEMPO DE GERMINACIÓN - "EN DIAS"</label>
            <?php
            $validador->mostrar_error_germinacion();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="cosechar" id="cosechar" <?php $validador->mostrar_cosecha() ?>><span class="barra"></span>
            <label for="cosechar">COSECHARSE - "EN DIAS"</label>
            <?php
            $validador->mostrar_error_cosecha();
            ?>
        </div>

        <div class="grupo">
            <?php
            if ($_POST['temporada'] === "verano") {
            ?>
                <div class="select">
                    <select name="temporada" id="temporada">
                        <option value="">SELECCIONE UNA TEMPORADA</option>
                        <option value="verano" selected>VERANO</option>
                        <option value="otoño">OTOÑO</option>
                        <option value="invierno">INVIERNO</option>
                        <option value="primavera">PRIMAVERA</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['temporada'] === "otoño") {
            ?>
                <div class="select">
                    <select name="temporada" id="temporada">
                        <option value="">SELECCIONE UNA TEMPORADA</option>
                        <option value="verano">VERANO</option>
                        <option value="otoño" selected>OTOÑO</option>
                        <option value="invierno">INVIERNO</option>
                        <option value="primavera">PRIMAVERA</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['temporada'] === "invierno") {
            ?>
                <div class="select">
                    <select name="temporada" id="temporada">
                        <option value="">SELECCIONE UNA TEMPORADA</option>
                        <option value="verano">VERANO</option>
                        <option value="otoño">OTOÑO</option>
                        <option value="invierno" selected>INVIERNO</option>
                        <option value="primavera">PRIMAVERA</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['temporada'] === "primavera") {
            ?>
                <div class="select">
                    <select name="temporada" id="temporada">
                        <option value="">SELECCIONE UNA TEMPORADA</option>
                        <option value="verano">VERANO</option>
                        <option value="otoño">OTOÑO</option>
                        <option value="invierno">INVIERNO</option>
                        <option value="primavera" selected>PRIMAVERA</option>
                    </select>
                </div>
            <?php
            } else {
            ?>
                <div class="select">
                    <select name="temporada" id="temporada">
                        <option value="" selected>SELECCIONE UNA TEMPORADA</option>
                        <option value="verano">VERANO</option>
                        <option value="otoño">OTOÑO</option>
                        <option value="invierno">INVIERNO</option>
                        <option value="primavera">PRIMAVERA</option>
                    </select>
                </div>
            <?php
            }
            ?>
            <?php
            $validador->mostrar_error_temporada();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="maceta" id="maceta" <?php $validador->mostrar_maceta() ?>><span class="barra"></span>
            <label for="maceta">TAMAÑO DE MACETA - "EN LITROS"</label>
            <?php
            $validador->mostrar_error_maceta();
            ?>
        </div>

        <div class="grupo">
            <?php
            if ($_POST['clima'] === "calido") {
            ?>
                <div class="select">
                    <select name="clima" id="clima">
                        <option value="">SELECCIONE UN CLIMA</option>
                        <option value="calido" selected>CALIDO</option>
                        <option value="templado">TEMPLADO</option>
                        <option value="frio">FRIO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['clima'] === "templado") {
            ?>
                <div class="select">
                    <select name="clima" id="clima">
                        <option value="">SELECCIONE UN CLIMA</option>
                        <option value="calido">CALIDO</option>
                        <option value="templado" selected>TEMPLADO</option>
                        <option value="frio">FRIO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['clima'] === "frio") {
            ?>
                <div class="select">
                    <select name="clima" id="clima">
                        <option value="">SELECCIONE UN CLIMA</option>
                        <option value="calido">CALIDO</option>
                        <option value="templado">TEMPLADO</option>
                        <option value="frio" selected>FRIO</option>
                    </select>
                </div>
            <?php
            } else {
            ?>
                <div class="select">
                    <select name="clima" id="clima">
                        <option value="" selected>SELECCIONE UN CLIMA</option>
                        <option value="calido">CALIDO</option>
                        <option value="templado">TEMPLADO</option>
                        <option value="frio">FRIO</option>
                    </select>
                </div>
            <?php
            }
            ?>
            <?php
            $validador->mostrar_error_clima();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="temperaturaMax" id="temperaturaMax" <?php $validador->mostrar_temperaturaMax() ?>><span class="barra"></span>
            <label for="temperaturaMax">TEMPERATURA MÁXIMA</label>
            <?php
            $validador->mostrar_error_temperaturaMax();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="temperaturaMin" id="temperaturaMin" <?php $validador->mostrar_temperaturaMin() ?>><span class="barra"></span>
            <label for="temperaturaMin">TEMPERATURA MÍNIMA</label>
            <?php
            $validador->mostrar_error_temperaturaMin();
            ?>
        </div>

        <div class="grupo">
            <input type="text" name="riego" id="riego" <?php $validador->mostrar_riego() ?>><span class="barra"></span>
            <label for="riego">CANTIDAD DE RIEGO</label>
            <?php
            $validador->mostrar_error_riego();
            ?>
        </div>

        <div class="grupo">
            <input type="text" name="luz" id="luz" <?php $validador->mostrar_luz() ?>><span class="barra"></span>
            <label for="luz">CANTIDAD DE LUZ SOLAR</label>
            <?php
            $validador->mostrar_error_luz();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="altura" id="altura" <?php $validador->mostrar_altura() ?>><span class="barra"></span>
            <label for="altura">ALTURA DEL CULTIVO - "EN CM"</label>
            <?php
            $validador->mostrar_error_altura();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="sembrar" id="sembrar" <?php $validador->mostrar_sembrarAlt() ?>><span class="barra"></span>
            <label for="sembrar">PROFUNDIDAD DE SIEMBRA - "EN CM"</label>
            <?php
            $validador->mostrar_error_sembrarAlt();
            ?>
        </div>

        <div class="grupo">
            <input type="number" name="separacion" id="separacion" <?php $validador->mostrar_separacion() ?>><span class="barra"></span>
            <label for="separacion">SEPARACIÓN DEL CULTIVO - "EN CM"</label>
            <?php
            $validador->mostrar_error_separacion();
            ?>
        </div>

        <div class="grupo">
            <?php
            if ($_POST['suelo'] === "arenoso") {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="">SELECCIONE UN SUELO</option>
                        <option value="arenoso" selected>ARENOSO</option>
                        <option value="arcilloso">ARCILLOSO</option>
                        <option value="calcareo">CALCÁREO</option>
                        <option value="franco">FRANCO</option>
                        <option value="limoso">LIMOSO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['suelo'] === "arcilloso") {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="">SELECCIONE UN SUELO</option>
                        <option value="arenoso">ARENOSO</option>
                        <option value="arcilloso" selected>ARCILLOSO</option>
                        <option value="calcareo">CALCÁREO</option>
                        <option value="franco">FRANCO</option>
                        <option value="limoso">LIMOSO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['suelo'] === "calcareo") {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="">SELECCIONE UN SUELO</option>
                        <option value="arenoso">ARENOSO</option>
                        <option value="arcilloso">ARCILLOSO</option>
                        <option value="calcareo" selected>CALCÁREO</option>
                        <option value="franco">FRANCO</option>
                        <option value="limoso">LIMOSO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['suelo'] === "franco") {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="">SELECCIONE UN SUELO</option>
                        <option value="arenoso">ARENOSO</option>
                        <option value="arcilloso">ARCILLOSO</option>
                        <option value="calcareo">CALCÁREO</option>
                        <option value="franco" selected>FRANCO</option>
                        <option value="limoso">LIMOSO</option>
                    </select>
                </div>
            <?php
            } elseif ($_POST['suelo'] === "limoso") {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="">SELECCIONE UN SUELO</option>
                        <option value="arenoso">ARENOSO</option>
                        <option value="arcilloso">ARCILLOSO</option>
                        <option value="calcareo">CALCÁREO</option>
                        <option value="franco">FRANCO</option>
                        <option value="limoso" selected>LIMOSO</option>
                    </select>
                </div>
            <?php
            } else {
            ?>
                <div class="select">
                    <select name="suelo" id="suelo">
                        <option value="" selected>SELECCIONE UN SUELO</option>
                        <option value="arenoso">ARENOSO</option>
                        <option value="arcilloso">ARCILLOSO</option>
                        <option value="calcareo">CALCÁREO</option>
                        <option value="franco">FRANCO</option>
                        <option value="limoso">LIMOSO</option>
                    </select>
                </div>
            <?php
            }
            ?>
            <?php
            $validador->mostrar_error_suelo();
            ?>
        </div>

        <div class="grupo">
            <input type="text" name="ph" id="ph" <?php $validador->mostrar_ph() ?>><span class="barra"></span>
            <label for="ph">PH DEL SUELO</label>
            <?php
            $validador->mostrar_error_ph();
            ?>
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