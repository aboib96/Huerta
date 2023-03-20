<?php

    class Huerta{
        private $id;
        private $icono;
        private $imagen;
        private $nombre;
        private $descripcion;
        private $cientifico;
        private $tipo;
        private $germinacion;
        private $cosecha;
        private $temporada;
        private $maceta;
        private $clima;
        private $temperaturaMax;
        private $temperaturaMin;
        private $riego;
        private $luz;
        private $altura;
        private $sembrarAlt;
        private $separacion;
        private $suelo;
        private $ph;
        private $usuario;
        private $fecha;

        public function __construct($id,$icono,$imagen,$nombre,$descripcion,$cientifico,$tipo,$germinacion,$cosecha,$temporada,$maceta,$clima,$temperaturaMax,$temperaturaMin,$riego,$luz,$altura,$sembrarAlt,$separacion,$suelo,$ph,$usuario,$fecha)
        {
            $this -> $id                = $id;
            $this -> $icono             = $icono;
            $this -> $imagen            = $imagen;
            $this -> $nombre            = $nombre;
            $this -> $descripcion       = $descripcion;
            $this -> $cientifico        = $cientifico;
            $this -> $tipo              = $tipo;
            $this -> $germinacion       = $germinacion;
            $this -> $cosecha           = $cosecha;
            $this -> $temporada         = $temporada;
            $this -> $maceta            = $maceta;
            $this -> $clima             = $clima;
            $this -> $temperaturaMax    = $temperaturaMax;
            $this -> $temperaturaMin    = $temperaturaMin;
            $this -> $riego             = $riego;
            $this -> $luz               = $luz;
            $this -> $altura            = $altura;
            $this -> $sembrarAlt        = $sembrarAlt;
            $this -> $separacion        = $separacion;
            $this -> $suelo             = $suelo;
            $this -> $ph                = $ph;
            $this -> $usuario           = $usuario;
            $this -> $fecha             = $fecha;
        }


        public function getId(){
            return $this-> id;
        }
        public function getIcono(){
            return $this-> icono;
        }
        public function getImagen(){
            return $this-> imagen;
        }
        public function getNombre(){
            return $this-> nombre;
        }
        public function getDescripcion(){
            return $this-> descripcion;
        }
        public function getCientifico(){
            return $this-> cientifico;
        }
        public function getTipo(){
            return $this-> tipo;
        }
        public function getGerminacion(){
            return $this-> germinacion;
        }
        public function getCosecha(){
            return $this-> cosecha;
        }
        public function getTemporada(){
            return $this-> temporada;
        }
        public function getMaceta(){
            return $this-> maceta;
        }
        public function getClima(){
            return $this-> clima;
        }
        public function getTemperaturaMax(){
            return $this-> temperaturaMax;
        }
        public function getTemperaturaMin(){
            return $this-> temperaturaMin;
        }
        public function getRiego(){
            return $this-> riego;
        }
        public function getLuz(){
            return $this-> luz;
        }
        public function getAltura(){
            return $this-> altura;
        }
        public function getSembrarAlt(){
            return $this-> sembrarAlt;
        }
        public function getSeparacion(){
            return $this-> separacion;
        }
        public function getSuelo(){
            return $this-> suelo;
        }
        public function getPh(){
            return $this-> ph;
        }
        public function getUsuario(){
            return $this-> usuario;
        }
        public function getFecha(){
            return $this-> fecha;
        }

        public function setIcono($icono){
            $this-> icono =  $icono;
        }
        public function setImagen($imagen){
            $this-> imagen =  $imagen;
        }
        public function setNombre($nombre){
            $this-> nombre = $nombre;
        }
        public function setDescripcion($descripcion){
            $this-> descripcion = $descripcion;
        }
        public function setCientifico($cientifico){
            $this-> cientifico = $cientifico;
        }
        public function setTipo($tipo){
            $this-> tipo = $tipo;
        }
        public function setGerminacion($germinacion){
            $this-> germinacion = $germinacion;
        }
        public function setCosecha($cosecha){
            $this-> cosecha = $cosecha;
        }
        public function setTemporada($temporada){
            $this-> temporada = $temporada;
        }
        public function setMaceta($maceta){
            $this-> maceta = $maceta;
        }
        public function setClima($clima){
            $this-> clima = $clima;
        }
        public function setTemperaturaMax($temperaturaMax){
            $this-> temperaturaMax = $temperaturaMax;
        }
        public function setTemperaturaMin($temperaturaMin){
            $this-> temperaturaMin = $temperaturaMin;
        }
        public function setRiego($riego){
            $this-> riego = $riego;
        }
        public function setLuz($luz){
            $this-> luz = $luz;
        }
        public function setAltura($altura){
            $this-> altura = $altura;
        }
        public function setSembrarAlt($sembrarAlt){
            $this-> sembrarAlt = $sembrarAlt;
        }
        public function setSeparacion($separacion){
            $this-> separacion = $separacion;
        }
        public function setSuelo($suelo){
            $this-> suelo = $suelo;
        }
        public function setPh($ph){
            $this-> ph = $ph;
        }
        public function setUsuario($usuario){
            $this-> usuario = $usuario;
        }
        public function setFecha($fecha){
            $this-> fecha = $fecha;
        }

    }

?>
