<?php
include_once 'app//Huerta//RepositorioHuerta.inc.php';
include_once 'app//Huerta//ValidadorHuerta.inc.php';


class ValidadorRegistroHuerta extends ValidadorHuerta
{
    public function __construct($icono,$imagen,$nombre,$descripcion,$cientifico,$tipo,$germinacion,$cosecha,$temporada,$maceta,$clima,$temperaturaMax,$temperaturaMin,$riego,$luz,$altura,$sembrarAlt,$separacion,$suelo,$ph,$usuario,$fecha,$conexion)
    {
        $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->aviso_cierre = "</div>";

        $this->icono = "";
        $this->imagen = "";
        $this->nombre = "";
        $this->descripcion = "";
        $this->cientifico = "";
        $this->tipo = "";
        $this->germinacion = "";
        $this->cosecha = "";
        $this->temporada = "";
        $this->maceta = "";
        $this->clima = "";
        $this->temperaturaMax = "";
        $this->temperaturaMin = "";
        $this->riego = "";
        $this->luz = "";
        $this->altura = "";
        $this->sembrarAlt = "";
        $this->separacion = "";
        $this->suelo = "";
        $this->ph = "";
        $this->usuario = "";
        $this->fecha = "";


        $this->error_icono = $this->validar_icono($icono);
        $this->error_imagen = $this->validar_imagen($imagen);
        $this->error_nombre = $this->validar_nombre($conexion, $nombre);
        $this->error_descripcion = $this->validar_descripcion($descripcion);
        $this->error_cientifico = $this->validar_nombre_cientifico($conexion, $cientifico);
        $this->error_tipo = $this->validar_tipo($tipo);
        $this->error_germinacion = $this->validar_germinacio($germinacion);
        $this->error_cosecha = $this->validar_cosecha($cosecha);
        $this->error_temporada = $this->validar_temporada($temporada);
        $this->error_maceta = $this->validar_maceta($maceta);
        $this->error_clima = $this->validar_clima($clima);
        $this->error_temperaturaMax = $this->validar_temperaturaMax($temperaturaMax);
        $this->error_temperaturaMin = $this->validar_temperaturaMin($temperaturaMin);
        $this->error_riego = $this->validar_riego($riego);
        $this->error_luz = $this->validar_luz($luz);
        $this->error_altura = $this->validar_altura($altura);
        $this->error_sembrarAlt = $this->validar_sembrar($sembrarAlt);
        $this->error_separacion = $this->validar_separacion($separacion);
        $this->error_suelo = $this->validar_suelo($suelo);
        $this->error_ph = $this->validar_ph($ph);
        $this->error_usuario = $this->validar_usuario($usuario);
        $this->error_fecha = $this->validar_fecha($fecha);
    }
}


?>