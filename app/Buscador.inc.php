<?php

include_once 'app/Conexion.inc.php';

class Buscador extends Conexion
{
    public function buscarUsuario($buscar = false, $num = false)
    {
        Conexion::abrir_conexion();
        if ($num == 1) {
            $sql = $this->obtener_conexion()->prepare('SELECT * FROM usuarios WHERE nombreUsuario LIKE "%' . $buscar . '%"');
            $sql->execute();
            return $sql->fetchAll();
        }
    Conexion::cerrar_conexion();
    }
}