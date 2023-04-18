<?php

include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app//Huerta//ValidadorHuerta.inc.php';

class ValidadorHuertaModificado extends ValidadorHuerta
{

    private $cambios_realizados;

    public function __construct(protected $icono,
                                private $icono_origen,
                                protected $imagen,
                                private $imagen_origen,
                                protected $nombre,
                                private $nombre_origen,
                                protected $descripcion,
                                private $descripcion_origen,
                                protected $cientifico,
                                private $cientifico_origen,
                                protected $tipo,
                                private $tipo_origen,
                                protected $germinacion,
                                private $germinacion_origen,
                                protected $cosecha,
                                private $cosecha_origen,
                                protected $temporada,
                                private $temporada_origen,
                                protected $maceta,
                                private $maceta_origen,
                                protected $clima,
                                private $clima_origen,
                                protected $temperaturaMax,
                                private $temperaturaMax_origen,
                                protected $temperaturaMin,
                                private $temperaturaMin_origen,
                                protected $riego,
                                private $riego_origen,
                                protected $luz,
                                private $luz_origen,
                                protected $altura,
                                private $altura_origen,
                                protected $sembrarAlt,
                                private $sembrarAlt_origen,
                                protected $separacion,
                                private $separacion_origen,
                                protected $suelo,
                                private $suelo_origen,
                                protected $ph,
                                private $ph_origen,
                                protected $usuario,
                                private $usuario_origen,
                                protected $fecha,
                                private $fecha_origen,
                                protected $conexion)
    {
        $this->$icono_origen            = $this->devolver_variable_iniciada($icono_origen);
        $this->$imagen_origen           = $this->devolver_variable_iniciada($imagen_origen);
        $this->$nombre_origen           = $this->devolver_variable_iniciada($nombre_origen);
        $this->$descripcion_origen      = $this->devolver_variable_iniciada($descripcion_origen);
        $this->$cientifico_origen       = $this->devolver_variable_iniciada($cientifico_origen);
        $this->$tipo_origen             = $this->devolver_variable_iniciada($tipo_origen);
        $this->$germinacion_origen      = $this->devolver_variable_iniciada($germinacion_origen);
        $this->$cosecha_origen          = $this->devolver_variable_iniciada($cosecha_origen);
        $this->$temporada_origen        = $this->devolver_variable_iniciada($temporada_origen);
        $this->$maceta_origen           = $this->devolver_variable_iniciada($maceta_origen);
        $this->$clima_origen            = $this->devolver_variable_iniciada($clima_origen);
        $this->$temperaturaMax_origen   = $this->devolver_variable_iniciada($temperaturaMax_origen);
        $this->$temperaturaMin_origen   = $this->devolver_variable_iniciada($temperaturaMin_origen);
        $this->$riego_origen            = $this->devolver_variable_iniciada($riego_origen);
        $this->$luz_origen              = $this->devolver_variable_iniciada($luz_origen);
        $this->$altura_origen           = $this->devolver_variable_iniciada($altura_origen);
        $this->$sembrarAlt_origen       = $this->devolver_variable_iniciada($sembrarAlt_origen);
        $this->$separacion_origen       = $this->devolver_variable_iniciada($separacion_origen);
        $this->$suelo_origen            = $this->devolver_variable_iniciada($suelo_origen);
        $this->$ph_origen               = $this->devolver_variable_iniciada($ph_origen);
        $this->$usuario_origen          = $this->devolver_variable_iniciada($usuario_origen);
        $this->$fecha_origen            = $this->devolver_variable_iniciada($fecha_origen);

        $this->$icono                   = $this->devolver_variable_iniciada($icono);
        $this->$imagen                  = $this->devolver_variable_iniciada($imagen);
        $this->$nombre                  = $this->devolver_variable_iniciada($nombre);
        $this->$descripcion             = $this->devolver_variable_iniciada($descripcion);
        $this->$cientifico              = $this->devolver_variable_iniciada($cientifico);
        $this->$tipo                    = $this->devolver_variable_iniciada($tipo);
        $this->$germinacion             = $this->devolver_variable_iniciada($germinacion);
        $this->$cosecha                 = $this->devolver_variable_iniciada($cosecha);
        $this->$temporada               = $this->devolver_variable_iniciada($temporada);
        $this->$maceta                  = $this->devolver_variable_iniciada($maceta);
        $this->$clima                   = $this->devolver_variable_iniciada($clima);
        $this->$temperaturaMax          = $this->devolver_variable_iniciada($temperaturaMax);
        $this->$temperaturaMin          = $this->devolver_variable_iniciada($temperaturaMin);
        $this->$riego                   = $this->devolver_variable_iniciada($riego);
        $this->$luz                     = $this->devolver_variable_iniciada($luz);
        $this->$altura                  = $this->devolver_variable_iniciada($altura);
        $this->$sembrarAlt              = $this->devolver_variable_iniciada($sembrarAlt);
        $this->$separacion              = $this->devolver_variable_iniciada($separacion);
        $this->$suelo                   = $this->devolver_variable_iniciada($suelo);
        $this->$ph                      = $this->devolver_variable_iniciada($ph);
        $this->$usuario                 = $this->devolver_variable_iniciada($usuario);
        $this->$fecha                   = $this->devolver_variable_iniciada($fecha);


        if (
                $this->$icono            ==  $this->$icono_origen           &&         
                $this->$imagen           ==  $this->$imagen_origen          &&        
                $this->$nombre           ==  $this->$nombre_origen          &&        
                $this->$descripcion      ==  $this->$descripcion_origen     &&   
                $this->$cientifico       ==  $this->$cientifico_origen      &&    
                $this->$tipo             ==  $this->$tipo_origen            &&          
                $this->$germinacion      ==  $this->$germinacion_origen     &&   
                $this->$cosecha          ==  $this->$cosecha_origen         &&       
                $this->$temporada        ==  $this->$temporada_origen       &&     
                $this->$maceta           ==  $this->$maceta_origen          &&        
                $this->$clima            ==  $this->$clima_origen           &&         
                $this->$temperaturaMax   ==  $this->$temperaturaMax_origen  &&
                $this->$temperaturaMin   ==  $this->$temperaturaMin_origen  &&
                $this->$riego            ==  $this->$riego_origen           &&         
                $this->$luz              ==  $this->$luz_origen             &&           
                $this->$altura           ==  $this->$altura_origen          &&        
                $this->$sembrarAlt       ==  $this->$sembrarAlt_origen      &&    
                $this->$separacion       ==  $this->$separacion_origen      &&    
                $this->$suelo            ==  $this->$suelo_origen           &&         
                $this->$ph               ==  $this->$ph_origen              &&            
                $this->$usuario          ==  $this->$usuario_origen         &&       
                $this->$fecha            ==  $this->$fecha_origen) {
            $this->cambios_realizados = false;
        } else {
            $this->cambios_realizados = true;
        }

        if ($this->cambios_realizados) {

            $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
            $this->aviso_cierre = "</div>";

            if ($this->icono !== $this->icono_origen) {
                $this->error_icono = $this->validar_icono($this->icono);
            } else {
                $this->error_icono = "";
            }

            if ($this->imagen !== $this->imagen_origen) {
                $this->error_imagen = $this->validar_imagen($this->imagen);
            } else {
                $this->error_imagen = "";
            }

            if ($this->nombre !== $this->nombre_origen) {
                $this->error_nombre = $this->validar_nombre($conexion, $this->nombre);
            } else {
                $this->error_nombre = "";
            }

            if ($this->descripcion !== $this->descripcion_origen) {
                $this->error_descripcion = $this->validar_descripcion($this->descripcion);
            } else {
                $this->error_descripcion = "";
            }

            if ($this->cientifico !== $this->cientifico_origen) {
                $this->error_cientifico = $this->validar_nombre_cientifico($conexion, $this->cientifico);
            } else {
                $this->error_cientifico = "";
            }

            if ($this->tipo !== $this->tipo_origen) {
                $this->error_tipo = $this->validar_tipo($this->tipo);
            } else {
                $this->error_tipo = "";
            }

            if ($this->germinacion !== $this->germinacion_origen) {
                $this->error_germinacion = $this->validar_germinacio($this->germinacion);
            } else {
                $this->error_germinacion = "";
            }

            if ($this->cosecha !== $this->cosecha_origen) {
                $this->error_cosecha = $this->validar_cosecha($this->cosecha);
            } else {
                $this->error_cosecha = "";
            }

            if ($this->temporada !== $this->temporada_origen) {
                $this->error_temporada = $this->validar_temporada($this->temporada);
            } else {
                $this->error_temporada = "";
            }

            if ($this->maceta !== $this->maceta_origen) {
                $this->error_maceta = $this->validar_maceta($this->maceta);
            } else {
                $this->error_maceta = "";
            }

            if ($this->clima !== $this->clima_origen) {
                $this->error_clima = $this->validar_clima($this->clima);
            } else {
                $this->error_clima = "";
            }

            if ($this->temperaturaMax !== $this->temperaturaMax_origen) {
                $this->error_temperaturaMax = $this->validar_temperaturaMax($this->temperaturaMax);
            } else {
                $this->error_temperaturaMax = "";
            }

            if ($this->temperaturaMin !== $this->temperaturaMin_origen) {
                $this->error_temperaturaMin = $this->validar_temperaturaMin($this->temperaturaMin);
            } else {
                $this->error_temperaturaMin = "";
            }

            if ($this->riego !== $this->riego_origen) {
                $this->error_riego = $this->validar_riego($this->riego);
            } else {
                $this->error_riego = "";
            }

            if ($this->luz !== $this->luz_origen) {
                $this->error_luz = $this->validar_luz($this->luz);
            } else {
                $this->error_luz = "";
            }

            if ($this->altura !== $this->altura_origen) {
                $this->error_altura = $this->validar_altura($this->altura);
            } else {
                $this->error_altura = "";
            }

            if ($this->sembrarAlt !== $this->sembrarAlt_origen) {
                $this->error_sembrarAlt = $this->validar_sembrar($this->sembrarAlt);
            } else {
                $this->error_sembrarAlt = "";
            }

            if ($this->separacion !== $this->separacion_origen) {
                $this->error_separacion = $this->validar_separacion($this->separacion);
            } else {
                $this->error_separacion = "";
            }

            if ($this->suelo !== $this->suelo_origen) {
                $this->error_suelo = $this->validar_suelo($this->suelo);
            } else {
                $this->error_suelo = "";
            }

            if ($this->ph !== $this->ph_origen) {
                $this->error_ph = $this->validar_ph($this->ph);
            } else {
                $this->error_ph = "";
            }

            if ($this->usuario !== $this->usuario_origen) {
                $this->error_usuario = $this->validar_usuario($this->usuario);
            } else {
                $this->error_usuario = "";
            }

            if ($this->fecha !== $this->fecha_origen) {
                $this->error_fecha = $this->validar_fecha($this->fecha);
            } else {
                $this->error_fecha = "";
            }
        } else {
            echo 'No hay cambios';
        }
    }

    private function devolver_variable_iniciada($variable)
    {
        if ($this->variable_iniciada($variable)) {
            return $variable;
        } else {
            return "";
        }
    }

    public function getCambios()
    {
        return $this->cambios_realizados;
    }

    public function getIcono_origen()
    {
        return $this->icono_origen;
    }

    public function getImagen_origen()
    {
        return $this->imagen_origen;
    }

    public function getNombre_origen()
    {
        return $this->nombre_origen;
    }

    public function getDescripcion_origen()
    {
        return $this->descripcion_origen;
    }

    public function getCientifico_origen()
    {
        return $this->cientifico_origen;
    }

    public function getTipo_origen()
    {
        return $this->tipo_origen;
    }

    public function getGerminacion_origen()
    {
        return $this->germinacion_origen;
    }

    public function getCosecha_origen()
    {
        return $this->cosecha_origen;
    }

    public function getTemporada_origen()
    {
        return $this->temporada_origen;
    }

    public function getMaceta_origen()
    {
        return $this->maceta_origen;
    }

    public function getClima_origen()
    {
        return $this->clima_origen;
    }

    public function getTemperaturaMax_origen()
    {
        return $this->temperaturaMax_origen;
    }

    public function getTemperaturaMin_origen()
    {
        return $this->temperaturaMin_origen;
    }

    public function getRiego_origen()
    {
        return $this->riego_origen;
    }

    public function getLuz_origen()
    {
        return $this->luz_origen;
    }

    public function getAltura_origen()
    {
        return $this->altura_origen;
    }

    public function getSembrarAlt_origen()
    {
        return $this->sembrarAlt_origen;
    }

    public function getSeparacion_origen()
    {
        return $this->separacion_origen;
    }

    public function getSuelo_origen()
    {
        return $this->suelo_origen;
    }

    public function getPh_origen()
    {
        return $this->ph_origen;
    }

    public function getUsuario_origen()
    {
        return $this->usuario_origen;
    }

    public function getFecha_origen()
    {
        return $this->fecha_origen;
    }
}
