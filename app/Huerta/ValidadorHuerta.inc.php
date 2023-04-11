<?php
abstract class ValidadorHuerta
{

    protected $aviso_inicio;
    protected $aviso_cierre;
    protected $icono;
    protected $imagen;
    protected $nombre;
    protected $descripcion;
    protected $cientifico;
    protected $tipo;
    protected $germinacion;
    protected $cosecha;
    protected $temporada;
    protected $maceta;
    protected $clima;
    protected $temperaturaMax;
    protected $temperaturaMin;
    protected $riego;
    protected $luz;
    protected $altura;
    protected $sembrarAlt;
    protected $separacion;
    protected $suelo;
    protected $ph;
    protected $usuario;
    protected $fecha;

    protected $error_icono;
    protected $error_imagen;
    protected $error_nombre;
    protected $error_descripcion;
    protected $error_cientifico;
    protected $error_tipo;
    protected $error_germinacion;
    protected $error_cosecha;
    protected $error_temporada;
    protected $error_maceta;
    protected $error_clima;
    protected $error_temperaturaMax;
    protected $error_temperaturaMin;
    protected $error_riego;
    protected $error_luz;
    protected $error_altura;
    protected $error_sembrarAlt;
    protected $error_separacion;
    protected $error_suelo;
    protected $error_ph;
    protected $error_usuario;
    protected $error_fecha;

    function __construct()
    {
    }
    protected function variable_iniciada($variable)
    {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    protected function validar_icono($icono)
    {
        if (!$this->variable_iniciada($icono)) {
            return "DEBES INGRESAR UN NOMBRE PARA EL ICONO";
        } else {
            $this->icono = $icono;
        }
        return "";
    }

    protected function validar_imagen($imagen)
    {
        if (!$this->variable_iniciada($imagen)) {
            return "DEBES INGRESAR UNA IMAGEN";
        } else {
            $this->imagen = $imagen;
        }
        return "";
    }

    protected function validar_nombre($conexion, $nombre)
    {
        if (!$this->variable_iniciada($nombre)) {
            return "DEBES ESCRIBIR UN NOMBRE PARA LA HUERTA";
        } else {
            $this->nombre = $nombre;
        }

        if (strlen($nombre) > 24) {
            return "EL NOMBRE NO DEBE SER MAS LARGO QUE 24 CARACTERES";
        }
        if (RepositorioHuerta::huerta_existe($conexion, $nombre)) {
            return "EL NOMBRE YA SE ENCUENTRA EN LA HUERTA";
        }
        return "";
    }

    protected function validar_descripcion($descripcion)
    {
        if (!$this->variable_iniciada($descripcion)) {
            return "DEBES INGRESAR UNA DESCRIPCIÓN ";
        } else {
            $this->descripcion = $descripcion;
        }
        return "";
    }

    protected function validar_nombre_cientifico($conexion, $cientifico)
    {
        if (!$this->variable_iniciada($cientifico)) {
            return "DEBES ESCRIBIR UN NOMBRE CIENTIFICO";
        } else {
            $this->cientifico = $cientifico;
        }

        if (strlen($cientifico) > 24) {
            return "EL NOMBRE NO DEBE SER MAS LARGO QUE 24 CARACTERES";
        }
        if (RepositorioHuerta::cientifico_existe($conexion, $cientifico)) {
            return "EL NOMBRE CIENTIFICO YA SE ENCUENTRA EN LA HUERTA";
        }
        return "";
    }

    protected function validar_tipo($tipo)
    {
        if (!$this->variable_iniciada($tipo)) {
            return "DEBES SELECCIONAR UN TIPO";
        } else {
            $this->tipo = $tipo;
        }
        return "";
    }

    protected function validar_germinacio($germinacion)
    {
        if (!$this->variable_iniciada($germinacion)) {
            return "DEBES INGRESAR EL TIEMPO DE GERMINACIÓN";
        } else {
            $this->germinacion = $germinacion;
        }
        return "";
    }

    protected function validar_cosecha($cosecha)
    {
        if (!$this->variable_iniciada($cosecha)) {
            return "DEBES INGRESAR EL TIEMPO DE COSECHA";
        } else {
            $this->cosecha = $cosecha;
        }
        return "";
    }

    protected function validar_temporada($temporada)
    {
        if (!$this->variable_iniciada($temporada)) {
            return "DEBES SELECCIONAR LA TEMPORADA";
        } else {
            $this->temporada = $temporada;
        }
        return "";
    }

    protected function validar_maceta($maceta)
    {
        if (!$this->variable_iniciada($maceta)) {
            return "DEBES INGRESAR EL TAMAÑO DE MACETA";
        } else {
            $this->maceta = $maceta;
        }
        return "";
    }

    protected function validar_clima($clima)
    {
        if (!$this->variable_iniciada($clima)) {
            return "DEBES SELECCIONAR EL CLIMA";
        } else {
            $this->clima = $clima;
        }
        return "";
    }

    protected function validar_temperaturaMax($temperaturaMax)
    {
        if (!$this->variable_iniciada($temperaturaMax)) {
            return "DEBES INGRESAR LA TEMPERATURA MÁXIMA";
        } else {
            $this->temperaturaMax = $temperaturaMax;
        }
        return "";
    }

    protected function validar_temperaturaMin($temperaturaMin)
    {
        if (!$this->variable_iniciada($temperaturaMin)) {
            return "DEBES INGRESAR LA TEMPERATURA MÍNIMA";
        } else {
            $this->temperaturaMin = $temperaturaMin;
        }
        return "";
    }

    protected function validar_riego($riego)
    {
        if (!$this->variable_iniciada($riego)) {
            return "DEBES INGRESAR LA FRECUENCIA DE RIEGO";
        } else {
            $this->riego = $riego;
        }
        return "";
    }

    protected function validar_luz($luz)
    {
        if (!$this->variable_iniciada($luz)) {
            return "DEBES INGRESAR LA NECESIDAD DE LUZ";
        } else {
            $this->luz = $luz;
        }
        return "";
    }

    protected function validar_altura($altura)
    {
        if (!$this->variable_iniciada($altura)) {
            return "DEBES INGRESAR LA ALTURA DEL CULTIVO";
        } else {
            $this->altura = $altura;
        }
        return "";
    }

    protected function validar_sembrar($sembrarAlt)
    {
        if (!$this->variable_iniciada($sembrarAlt)) {
            return "DEBES INGRESAR LA PROFUNDIDAD PARA SEMBRAR";
        } else {
            $this->sembrarAlt = $sembrarAlt;
        }
        return "";
    }

    protected function validar_separacion($separacion)
    {
        if (!$this->variable_iniciada($separacion)) {
            return "DEBES INGRESAR LA SEPARACION DE SIEMBRA";
        } else {
            $this->separacion = $separacion;
        }
        return "";
    }

    protected function validar_suelo($suelo)
    {
        if (!$this->variable_iniciada($suelo)) {
            return "DEBES SELECCIONAR EL TIPO DE SUELO";
        } else {
            $this->suelo = $suelo;
        }
        return "";
    }

    protected function validar_ph($ph)
    {
        if (!$this->variable_iniciada($ph)) {
            return "DEBES INGRESAR EL PH DE LA PLANTA";
        } else {
            $this->ph = $ph;
        }
        return "";
    }

    protected function validar_usuario($usuario)
    {
        if (!$this->variable_iniciada($usuario)) {
            return "NO EXISTE EL USUARIO";
        } else {
            $this->usuario = $usuario;
        }
        return "";
    }

    protected function validar_fecha($fecha)
    {
        if (!$this->variable_iniciada($fecha)) {
            return "NO EXISTE LA FECHA";
        } else {
            $this->fecha = $fecha;
        }
        return "";
    }

    public function getIcono()
    {
        return $this->icono;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getCientifico()
    {
        return $this->cientifico;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getGerminacion()
    {
        return $this->germinacion;
    }
    public function getCosecha()
    {
        return $this->cosecha;
    }
    public function getTemporada()
    {
        return $this->temporada;
    }
    public function getMaceta()
    {
        return $this->maceta;
    }
    public function getClima()
    {
        return $this->clima;
    }
    public function getTemperaturaMax()
    {
        return $this->temperaturaMax;
    }
    public function getTemperaturaMin()
    {
        return $this->temperaturaMin;
    }
    public function getRiego()
    {
        return $this->riego;
    }
    public function getLuz()
    {
        return $this->luz;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getSembrarAlt()
    {
        return $this->sembrarAlt;
    }
    public function getSeparacion()
    {
        return $this->separacion;
    }
    public function getSuelo()
    {
        return $this->suelo;
    }
    public function getPh()
    {
        return $this->ph;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getFecha()
    {
        return $this->fecha;
    }

    public function getError_Icono()
    {
        return $this->error_icono;
    }
    public function getError_Imagen()
    {
        return $this->error_imagen;
    }
    public function getError_Nombre()
    {
        return $this->error_nombre;
    }
    public function getError_Descripcion()
    {
        return $this->error_descripcion;
    }
    public function getError_Cientifico()
    {
        return $this->error_cientifico;
    }
    public function getError_Tipo()
    {
        return $this->error_tipo;
    }
    public function getError_Germinacion()
    {
        return $this->error_germinacion;
    }
    public function getError_Cosecha()
    {
        return $this->error_cosecha;
    }
    public function getError_Temporada()
    {
        return $this->error_temporada;
    }
    public function getError_Maceta()
    {
        return $this->error_maceta;
    }
    public function getError_Clima()
    {
        return $this->error_clima;
    }
    public function getError_TemperaturaMax()
    {
        return $this->error_temperaturaMax;
    }
    public function getError_TemperaturaMin()
    {
        return $this->error_temperaturaMin;
    }
    public function getError_Riego()
    {
        return $this->error_riego;
    }
    public function getError_Luz()
    {
        return $this->error_luz;
    }
    public function getError_Altura()
    {
        return $this->error_altura;
    }
    public function getError_SembrarAlt()
    {
        return $this->error_sembrarAlt;
    }
    public function getError_Separacion()
    {
        return $this->error_separacion;
    }
    public function getError_Suelo()
    {
        return $this->error_suelo;
    }
    public function getError_Ph()
    {
        return $this->error_ph;
    }
    public function getError_Usuario()
    {
        return $this->error_usuario;
    }
    public function getError_Fecha()
    {
        return $this->error_fecha;
    }


    public function mostrar_icono()
    {
        if ($this->icono !== "") {
            echo 'value="' . $this->icono . '"';
        }
    }
    public function mostrar_imagen()
    {
        if ($this->imagen !== "") {
            echo 'value="' . $this->imagen . '"';
        }
    }
    public function mostrar_nombre()
    {
        if ($this->nombre !== "") {
            echo 'value="' . $this->nombre . '"';
        }
    }
    public function mostrar_descripcion()
    {
        if ($this->descripcion !== "") {
            echo $this->descripcion;
        }
    }
    public function mostrar_cientifico()
    {
        if ($this->cientifico !== "") {
            echo 'value="' . $this->cientifico . '"';
        }
    }
    public function mostrar_tipo()
    {
        if ($this->tipo !== "") {
            echo 'value="' . $this->tipo . '"';
        }
    }
    public function mostrar_germinacion()
    {
        if ($this->germinacion !== "") {
            echo 'value="' . $this->germinacion . '"';
        }
    }
    public function mostrar_cosecha()
    {
        if ($this->cosecha !== "") {
            echo 'value="' . $this->cosecha . '"';
        }
    }
    public function mostrar_temporada()
    {
        if ($this->temporada !== "") {
            echo 'value="' . $this->temporada . '"';
        }
    }
    public function mostrar_maceta()
    {
        if ($this->maceta !== "") {
            echo 'value="' . $this->maceta . '"';
        }
    }
    public function mostrar_clima()
    {
        if ($this->clima !== "") {
            echo 'value="' . $this->clima . '"';
        }
    }
    public function mostrar_temperaturaMax()
    {
        if ($this->temperaturaMax !== "") {
            echo 'value="' . $this->temperaturaMax . '"';
        }
    }
    public function mostrar_temperaturaMin()
    {
        if ($this->temperaturaMin !== "") {
            echo 'value="' . $this->temperaturaMin . '"';
        }
    }
    public function mostrar_riego()
    {
        if ($this->riego !== "") {
            echo 'value="' . $this->riego . '"';
        }
    }
    public function mostrar_luz()
    {
        if ($this->luz !== "") {
            echo 'value="' . $this->luz . '"';
        }
    }
    public function mostrar_altura()
    {
        if ($this->altura !== "") {
            echo 'value="' . $this->altura . '"';
        }
    }
    public function mostrar_sembrarAlt()
    {
        if ($this->sembrarAlt !== "") {
            echo 'value="' . $this->sembrarAlt . '"';
        }
    }
    public function mostrar_separacion()
    {
        if ($this->separacion !== "") {
            echo 'value="' . $this->separacion . '"';
        }
    }
    public function mostrar_suelo()
    {
        if ($this->suelo !== "") {
            echo 'value="' . $this->suelo . '"';
        }
    }
    public function mostrar_ph()
    {
        if ($this->ph !== "") {
            echo 'value="' . $this->ph . '"';
        }
    }
    public function mostrar_usuario()
    {
        if ($this->usuario !== "") {
            echo 'value="' . $this->usuario . '"';
        }
    }
    public function mostrar_fecha()
    {
        if ($this->fecha !== "") {
            echo 'value="' . $this->fecha . '"';
        }
    }


    public function mostrar_error_icono()
    {
        if ($this->error_icono !== "") {
            echo $this->aviso_inicio . $this->error_icono . $this->aviso_cierre;
        }
    }
    public function mostrar_error_imagen()
    {
        if ($this->error_imagen !== "") {
            echo $this->aviso_inicio . $this->error_imagen . $this->aviso_cierre;
        }
    }
    public function mostrar_error_nombre()
    {
        if ($this->error_nombre !== "") {
            echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
        }
    }
    public function mostrar_error_descripcion()
    {
        if ($this->error_descripcion !== "") {
            echo $this->aviso_inicio . $this->error_descripcion . $this->aviso_cierre;
        }
    }
    public function mostrar_error_cientifico()
    {
        if ($this->error_cientifico !== "") {
            echo $this->aviso_inicio . $this->error_cientifico . $this->aviso_cierre;
        }
    }
    public function mostrar_error_tipo()
    {
        if ($this->error_tipo !== "") {
            echo $this->aviso_inicio . $this->error_tipo . $this->aviso_cierre;
        }
    }
    public function mostrar_error_germinacion()
    {
        if ($this->error_germinacion !== "") {
            echo $this->aviso_inicio . $this->error_germinacion . $this->aviso_cierre;
        }
    }
    public function mostrar_error_cosecha()
    {
        if ($this->error_cosecha !== "") {
            echo $this->aviso_inicio . $this->error_cosecha . $this->aviso_cierre;
        }
    }
    public function mostrar_error_temporada()
    {
        if ($this->error_temporada !== "") {
            echo $this->aviso_inicio . $this->error_temporada . $this->aviso_cierre;
        }
    }
    public function mostrar_error_maceta()
    {
        if ($this->error_maceta !== "") {
            echo $this->aviso_inicio . $this->error_maceta . $this->aviso_cierre;
        }
    }
    public function mostrar_error_clima()
    {
        if ($this->error_clima !== "") {
            echo $this->aviso_inicio . $this->error_clima . $this->aviso_cierre;
        }
    }
    public function mostrar_error_temperaturaMax()
    {
        if ($this->error_temperaturaMax !== "") {
            echo $this->aviso_inicio . $this->error_temperaturaMax . $this->aviso_cierre;
        }
    }
    public function mostrar_error_temperaturaMin()
    {
        if ($this->error_temperaturaMin !== "") {
            echo $this->aviso_inicio . $this->error_temperaturaMin . $this->aviso_cierre;
        }
    }
    public function mostrar_error_riego()
    {
        if ($this->error_riego !== "") {
            echo $this->aviso_inicio . $this->error_riego . $this->aviso_cierre;
        }
    }
    public function mostrar_error_luz()
    {
        if ($this->error_luz !== "") {
            echo $this->aviso_inicio . $this->error_luz . $this->aviso_cierre;
        }
    }
    public function mostrar_error_altura()
    {
        if ($this->error_altura !== "") {
            echo $this->aviso_inicio . $this->error_altura . $this->aviso_cierre;
        }
    }
    public function mostrar_error_sembrarAlt()
    {
        if ($this->error_sembrarAlt !== "") {
            echo $this->aviso_inicio . $this->error_sembrarAlt . $this->aviso_cierre;
        }
    }
    public function mostrar_error_separacion()
    {
        if ($this->error_separacion !== "") {
            echo $this->aviso_inicio . $this->error_separacion . $this->aviso_cierre;
        }
    }
    public function mostrar_error_suelo()
    {
        if ($this->error_suelo !== "") {
            echo $this->aviso_inicio . $this->error_suelo . $this->aviso_cierre;
        }
    }
    public function mostrar_error_ph()
    {
        if ($this->error_ph !== "") {
            echo $this->aviso_inicio . $this->error_ph . $this->aviso_cierre;
        }
    }
    public function mostrar_error_usuario()
    {
        if ($this->error_usuario !== "") {
            echo $this->aviso_inicio . $this->error_usuario . $this->aviso_cierre;
        }
    }
    public function mostrar_error_fecha()
    {
        if ($this->error_fecha !== "") {
            echo $this->aviso_inicio . $this->error_fecha . $this->aviso_cierre;
        }
    }

    public function registro_validado()
    {
        if (
            $this->error_icono === "" &&
            $this->error_imagen === "" &&
            $this->error_nombre === "" &&
            $this->error_descripcion === "" &&
            $this->error_cientifico === "" &&
            $this->error_tipo === "" &&
            $this->error_germinacion === "" &&
            $this->error_cosecha === "" &&
            $this->error_temporada === "" &&
            $this->error_maceta === "" &&
            $this->error_clima === "" &&
            $this->error_temperaturaMax === "" &&
            $this->error_temperaturaMin === "" &&
            $this->error_riego === "" &&
            $this->error_luz === "" &&
            $this->error_altura === "" &&
            $this->error_sembrarAlt === "" &&
            $this->error_separacion === "" &&
            $this->error_suelo === "" &&
            $this->error_ph === "" &&
            $this->error_usuario === "" &&
            $this->error_fecha === ""
        ) {
            return true;
        } else {
            return false;
        }
    }
}
