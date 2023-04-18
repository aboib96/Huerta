<?php

class Huerta
{

    public function __construct(
        private $id,
        private $icono,
        private $imagen,
        private $nombre,
        private $descripcion,
        private $cientifico,
        private $germinacion,
        private $cosecha,
        private $maceta,
        private $clima,
        private $temperaturaMax,
        private $temperaturaMin,
        private $riego,
        private $luz,
        private $altura,
        private $sembrarAlt,
        private $separacion,
        private $ph,
        private $tipo,
        private $temporada,
        private $suelo,
        private $usuario,
        private $fecha
    ) {
    }

    public function obtenerId()
    {
        return $this->id;
    }
    public function obtenerIcono()
    {
        return $this->icono;
    }
    public function obtenerImagen()
    {
        return $this->imagen;
    }
    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function obtenerDescripcion()
    {
        return $this->descripcion;
    }
    public function obtenerCientifico()
    {
        return $this->cientifico;
    }

    public function obtenerGerminacion()
    {
        return $this->germinacion;
    }
    public function obtenerCosecha()
    {
        return $this->cosecha;
    }
    public function obtenerMaceta()
    {
        return $this->maceta;
    }
    public function obtenerClima()
    {
        return $this->clima;
    }
    public function obtenerTemperaturaMax()
    {
        return $this->temperaturaMax;
    }
    public function obtenerTemperaturaMin()
    {
        return $this->temperaturaMin;
    }
    public function obtenerRiego()
    {
        return $this->riego;
    }
    public function obtenerLuz()
    {
        return $this->luz;
    }
    public function obtenerAltura()
    {
        return $this->altura;
    }
    public function obtenerSembrarAlt()
    {
        return $this->sembrarAlt;
    }
    public function obtenerSeparacion()
    {
        return $this->separacion;
    }
    public function obtenerPh()
    {
        return $this->ph;
    }
    public function obtenerTipo()
    {
        return $this->tipo;
    }
    public function obtenerTemporada()
    {
        return $this->temporada;
    }
    public function obtenerSuelo()
    {
        return $this->suelo;
    }
    public function obtenerUsuario()
    {
        return $this->usuario;
    }
    public function obtenerFecha()
    {
        return $this->fecha;
    }

    public function setIcono($icono)
    {
        $this->icono = $icono;
    }
    public function setImagen($imagen)
    {
        $this->imagen =  $imagen;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setCientifico($cientifico)
    {
        $this->cientifico = $cientifico;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setGerminacion($germinacion)
    {
        $this->germinacion = $germinacion;
    }
    public function setCosecha($cosecha)
    {
        $this->cosecha = $cosecha;
    }
    public function setTemporada($temporada)
    {
        $this->temporada = $temporada;
    }
    public function setMaceta($maceta)
    {
        $this->maceta = $maceta;
    }
    public function setClima($clima)
    {
        $this->clima = $clima;
    }
    public function setTemperaturaMax($temperaturaMax)
    {
        $this->temperaturaMax = $temperaturaMax;
    }
    public function setTemperaturaMin($temperaturaMin)
    {
        $this->temperaturaMin = $temperaturaMin;
    }
    public function setRiego($riego)
    {
        $this->riego = $riego;
    }
    public function setLuz($luz)
    {
        $this->luz = $luz;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setSembrarAlt($sembrarAlt)
    {
        $this->sembrarAlt = $sembrarAlt;
    }
    public function setSeparacion($separacion)
    {
        $this->separacion = $separacion;
    }
    public function setSuelo($suelo)
    {
        $this->suelo = $suelo;
    }
    public function setPh($ph)
    {
        $this->ph = $ph;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}
