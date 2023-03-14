<?php

class Usuario{
    
    private   $id;
    private   $nombre;
    private   $clave;
    private   $email;
    private   $estado;
    private   $perfil;
    
    public function __construct($id, $nombre, $clave, $email, $estado, $perfil) {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> clave = $clave;
        $this -> estado = $estado;
        $this -> perfil = $perfil;
    }
    public function obtenerId(){
        return $this-> id;
    }
    public function obtenerNombre(){
        return $this-> nombre;
    }
    public function obtenerClave(){
        return $this-> clave;
    }
    public function obtenerEmail(){
        return $this-> email;
    }
    public function obtenerEstado(){
        return $this-> estado;
    }
    public function obtenerPerfil(){
        return $this-> perfil;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}