<?php
include_once 'app//Usuario//RepositorioUsuario.inc.php';
include_once 'app//Usuario//ValidadorUsuario.inc.php';

class ValidadorUsuarioModificado extends ValidadorUsuario
{
    private $cambios_realizados;
    private $nombre_origen;
    private $email_origen;
    private $estado_origen;
    private $tipo_origen;


    public function __construct($nombre, $nombre_origen, $email, $email_origen, $estado, $estado_origen, $tipo, $tipo_origen, $conexion)
    {

        $this->nombre_origen    = $this->devolver_variable_iniciada($nombre_origen);
        $this->email_origen     = $this->devolver_variable_iniciada($email_origen);
        $this->estado_origen    = $this->devolver_variable_iniciada($estado_origen);
        $this->tipo_origen      = $this->devolver_variable_iniciada($tipo_origen);

        $this->nombre           = $this->devolver_variable_iniciada($nombre);
        $this->email            = $this->devolver_variable_iniciada($email);
        $this->estado           = $this->devolver_variable_iniciada($estado);
        $this->tipo             = $this->devolver_variable_iniciada($tipo);

        if (
            $this->nombre   == $this->nombre_origen     &&
            $this->email    == $this->email_origen      &&
            $this->estado   == $this->estado_origen     &&
            $this->tipo     == $this->tipo_origen
        ) {
            $this->cambios_realizados = false;
        } else {
            $this->cambios_realizados = true;
        }

        if ($this->cambios_realizados) {

            $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
            $this->aviso_cierre = "</div>";

            if ($this->nombre !== $this->nombre_origen) {
                $this->error_nombre = $this->validar_nombre($conexion, $this->nombre);
            } else {
                $this->error_nombre = "";
            }

            if ($this->email !== $this->email_origen) {
                $this->error_email = $this->validar_email($conexion, $this->email);
            } else {
                $this->error_email = "";
            }

            if ($this->estado !== $this->estado_origen) {
                $this->error_estado = $this->validar_estado($this->estado);
            } else {
                $this->error_estado = "";
            }

            if ($this->tipo !== $this->tipo_origen) {
                $this->error_tipo = $this->validar_tipo($this->tipo);
            } else {
                $this->error_tipo = "";
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

    public function getNombre_origen()
    {
        return $this->nombre_origen;
    }

    public function getEmail_origen()
    {
        return $this->email_origen;
    }

    public function getEstado_origen()
    {
        return $this->estado_origen;
    }

    public function getTipo_origen()
    {
        return $this->tipo_origen;
    }
}
