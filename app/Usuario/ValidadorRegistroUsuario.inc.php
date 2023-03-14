<?php
include_once 'app//Usuario//RepositorioUsuario.inc.php';
include_once 'app//Usuario//ValidadorUsuario.inc.php';

class ValidadorRegistro extends ValidadorUsuario
{

        public function __construct($nombre, $clave, $clave2, $email, $estado, $tipo, $conexion)
    {
        $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->aviso_cierre = "</div>";

        $this->nombre = "";
        $this->clave  = "";
        $this->email = "";
        $this->estado = "";
        $this->tipo   = "";


        $this->error_nombre   = $this->validar_nombre($conexion, $nombre);
        $this->error_email   = $this->validar_email($conexion, $email);
        $this->error_estado   = $this->validar_estado($estado);
        $this->error_tipo     = $this->validar_tipo($tipo);
        $this->error_clave    = $this->validar_clave($clave);
        $this->error_clave2   = $this->validar_clave2($clave, $clave2);

        if ($this->error_clave === "" && $this->error_clave2 === "") {
            $this->clave = $clave;
        }
    }

    
}
