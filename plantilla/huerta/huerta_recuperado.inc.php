<div class="container">
    <input type="hidden" id="id_huerta" name="id_huerta" value="<?php echo $id_huerta; ?>">
    <form action="" method="POST" id="form">
        <div class="formR">
            <div class="grupo">
                <input type="text" name="nombre" id="nombre" value="<?php echo $huerta_recuperada->obtenerNombre(); ?>" onkeyup="javascript:this.value=this.value.toUpperCase();"><span class="barra"></span>
                <label for="nombre">NOMBRE</label>
                <input type="hidden" id="nombre_original" name="nombre_original" value="<?php echo $huerta_recuperada->obtenerNombre(); ?>">
            </div>

            <div class="grupo">
                <textarea name="descripcion" id="descripcion" cols="10" rows="5" maxlength="500"><?php echo $huerta_recuperada->obtenerDescripcion() ?></textarea><span class="barra"></span>
                <label for="descripcion">DESCRIPCIÓN</label>
                <div class="contador" id="contador">0/500</div>
                <input type="hidden" id="descripcion_original" name="descripcion_original" value="<?php echo $huerta_recuperada->obtenerDescripcion(); ?>">
            </div>

            <div class="grupo">
                <input type="text" name="nombreC" id="nombreC" value="<?php echo $huerta_recuperada->obtenerCientifico(); ?>"><span class="barra"></span>
                <label for="nombreC">NOMBRE CIENTIFICO</label>
                <input type="hidden" id="cientifico_original" name="cientifico_original" value="<?php echo $huerta_recuperada->obtenerCientifico(); ?>">
            </div>

            <div class="grupo">
                <?php
                if ($huerta_recuperada->obtenerTipo() === "frutales") {
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
                } elseif ($huerta_recuperada->obtenerTipo() === "vegetales") {
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
                } elseif ($huerta_recuperada->obtenerTipo() === "aromaticas") {
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
                } elseif ($huerta_recuperada->obtenerTipo() === "flores") {
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
                } elseif ($huerta_recuperada->obtenerTipo() === "especias") {
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
                } elseif ($huerta_recuperada->obtenerTipo() === "suculentas") {
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
                <input type="hidden" id="tipo_original" name="tipo_original" value="<?php echo $huerta_recuperada->obtenerTipo(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="germina" id="germina" value="<?php echo $huerta_recuperada->obtenerGerminacion(); ?>"><span class="barra"></span>
                <label for="germina">TIEMPO DE GERMINACIÓN - "EN DIAS"</label>
                <input type="hidden" id="germinacion_original" name="germinacion_original" value="<?php echo $huerta_recuperada->obtenerGerminacion(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="cosechar" id="cosechar" value="<?php echo $huerta_recuperada->obtenerCosecha(); ?>"><span class="barra"></span>
                <label for="cosechar">COSECHARSE - "EN DIAS"</label>
                <input type="hidden" id="cosechar_original" name="cosechar_original" value="<?php echo $huerta_recuperada->obtenerCosecha(); ?>">
            </div>

            <div class="grupo">
                <?php
                if ($huerta_recuperada->obtenerTemporada() === "verano") {
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
                } elseif ($huerta_recuperada->obtenerTemporada() === "otoño") {
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
                } elseif ($huerta_recuperada->obtenerTemporada() === "invierno") {
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
                } elseif ($huerta_recuperada->obtenerTemporada() === "primavera") {
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
                <input type="hidden" id="temporada_original" name="temporada_original" value="<?php echo $huerta_recuperada->obtenerTemporada(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="maceta" id="maceta" value="<?php echo $huerta_recuperada->obtenerMaceta(); ?>"><span class="barra"></span>
                <label for="maceta">TAMAÑO DE MACETA - "EN LITROS"</label>
                <input type="hidden" id="maceta_original" name="maceta_original" value="<?php echo $huerta_recuperada->obtenerMaceta(); ?>">
            </div>

            <div class="grupo">
                <?php
                if ($huerta_recuperada->obtenerClima() === "calido") {
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
                } elseif ($huerta_recuperada->obtenerClima() === "templado") {
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
                } elseif ($huerta_recuperada->obtenerClima() === "frio") {
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
                <input type="hidden" id="clima_original" name="clima_original" value="<?php echo $huerta_recuperada->obtenerClima(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="temperaturaMax" id="temperaturaMax" value="<?php echo $huerta_recuperada->obtenerTemperaturaMax(); ?>"><span class="barra"></span>
                <label for="temperaturaMax">TEMPERATURA MÁXIMA</label>
                <input type="hidden" id="temperaturaMax_original" name="temperaturaMax_original" value="<?php echo $huerta_recuperada->obtenerTemperaturaMax(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="temperaturaMin" id="temperaturaMin" value="<?php echo $huerta_recuperada->obtenerTemperaturaMin(); ?>"><span class="barra"></span>
                <label for="temperaturaMin">TEMPERATURA MÍNIMA</label>
                <input type="hidden" id="temperaturaMin_original" name="temperaturaMin_original" value="<?php echo $huerta_recuperada->obtenerTemperaturaMin(); ?>">
            </div>

            <div class="grupo">
                <input type="text" name="riego" id="riego" value="<?php echo $huerta_recuperada->obtenerRiego(); ?>"><span class="barra"></span>
                <label for="riego">CANTIDAD DE RIEGO</label>
                <input type="hidden" id="riego_original" name="riego_original" value="<?php echo $huerta_recuperada->obtenerRiego(); ?>">
            </div>

            <div class="grupo">
                <input type="text" name="luz" id="luz" value="<?php echo $huerta_recuperada->obtenerLuz(); ?>"><span class="barra"></span>
                <label for="luz">CANTIDAD DE LUZ SOLAR</label>
                <input type="hidden" id="luz_original" name="luz_original" value="<?php echo $huerta_recuperada->obtenerLuz(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="altura" id="altura" value="<?php echo $huerta_recuperada->obtenerAltura(); ?>"><span class="barra"></span>
                <label for="altura">ALTURA DEL CULTIVO - "EN CM"</label>
                <input type="hidden" id="altura_original" name="altura_original" value="<?php echo $huerta_recuperada->obtenerAltura(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="sembrar" id="sembrar" value="<?php echo $huerta_recuperada->obtenerSembrarAlt(); ?>"><span class="barra"></span>
                <label for="sembrar">PROFUNDIDAD DE SIEMBRA - "EN CM"</label>
                <input type="hidden" id="sembrar_original" name="sembrar_original" value="<?php echo $huerta_recuperada->obtenerSembrarAlt(); ?>">
            </div>

            <div class="grupo">
                <input type="number" name="separacion" id="separacion" value="<?php echo $huerta_recuperada->obtenerSeparacion(); ?>"><span class="barra"></span>
                <label for="separacion">SEPARACIÓN DEL CULTIVO - "EN CM"</label>
                <input type="hidden" id="separacion_original" name="separacion_original" value="<?php echo $huerta_recuperada->obtenerSeparacion(); ?>">
            </div>

            <div class="grupo">
                <?php
                if ($huerta_recuperada->obtenerSuelo() === "arenoso") {
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
                } elseif ($huerta_recuperada->obtenerSuelo() === "arcilloso") {
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
                } elseif ($huerta_recuperada->obtenerSuelo() === "calcareo") {
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
                } elseif ($huerta_recuperada->obtenerSuelo() === "franco") {
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
                } elseif ($huerta_recuperada->obtenerSuelo() === "limoso") {
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
                <input type="hidden" id="suelo_original" name="suelo_original" value="<?php echo $huerta_recuperada->obtenerSuelo(); ?>">
            </div>

            <div class="grupo">
                <input type="text" name="ph" id="ph" value="<?php echo $huerta_recuperada->obtenerPh(); ?>"><span class="barra"></span>
                <label for="ph">PH DEL SUELO</label>
                <input type="hidden" id="ph_original" name="ph_original" value="<?php echo $huerta_recuperada->obtenerPh(); ?>">
            </div>

            <div class="grupo">
                <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['nombre_usuario']; ?>" readonly="readonly"><span class="barra"></span>
                <input type="hidden" id="usuario_original" name="usuario_original" value="<?php echo $huerta_recuperada->obtenerUsuario(); ?>">
            </div>

            <div class="grupo">
                <input type="hidden" name="fecha" id="fecha" value="<?php echo $huerta_recuperada->obtenerFecha(); ?>" readonly="readonly"><span class="barra"></span>
                <input type="hidden" id="fecha_original" name="fecha_original" value="<?php echo $huerta_recuperada->obtenerFecha(); ?>">
            </div>
            <div class="botonesEnvio">
                <div class="botonRegistro">
                    <button type="submit" id="guardar_cambios_huerta" class="btn btnCargar" name="guardar_cambios_huerta">ENVIAR</button>
                </div>

                <div class="botonCancelar">
                    <button type="submit" class="btn btnLimpiar" name="anular">CANCELAR</button>
                </div>
            </div>
        </div>
    </form>
</div>