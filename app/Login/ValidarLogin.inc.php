<?php
include_once 'app//Usuario//RepositorioUsuario.inc.php';
    
class ValidadorLogin{
    private $usuario;
    private $error;
        
    public function __construct($nombre, $clave, $conexion) {
        $this -> error = "";
        if (!$this -> variable_iniciada($nombre) || !$this -> variable_iniciada($clave)) {
            $this -> usuario = null;
            $this -> error = "DEBES INTRODUCIR TU NICK DE USUARIO Y TU CONTRASEÑA";
        } else {
            $this -> usuario = RepositorioUsuario::obtener_usuario($conexion, $nombre);
            
            if (is_null($this -> usuario) || !password_verify($clave, $this -> usuario -> obtenerClave())) {
                $this -> error = "DATOS INCORRECTOS";
            }elseif ($this->usuario->obtenerEstado()==="inactivo") {
                $this->error ="EL USUARIO ESTA INACTIVO NO PUEDE INGRESAR AL SISTEMA";
            }
        }
    }
    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    public function obtener_usuario() {
        return $this -> usuario;
    }
    
    public function obtener_error() {
        return $this -> error;
    }
    
    public function mostrar_error() {
        if ($this -> error !== '') {
            echo "<br><div class='alert alert-danger' role='alert'>";
            echo $this -> error;
            echo "</div><br>";
        }
    }
}