<?php
abstract class ValidadorUsuario
{

    protected $aviso_inicio;
    protected $aviso_cierre;
    protected $nombre;
    protected $clave;
    protected $email;
    protected $estado;
    protected $tipo;


    protected $error_nombre;
    protected $error_clave;
    protected $error_clave2;
    protected $error_email;
    protected $error_estado;
    protected $error_tipo;

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

    protected function validar_nombre($conexion, $nombre)
    {
        if (!$this->variable_iniciada($nombre)) {
            return "DEBES ESCRIBIR UN NOMBRE DE USUARIO";
        } else {
            $this->nombre = $nombre;
        }

        if (strlen($nombre) < 6) {
            return "EL NOMBRE DEBE SER MAS LARGO QUE 6 CARACTERES";
        }
        if (strlen($nombre) > 24) {
            return "EL NOMBRE NO DEBE SER MAS LARGO QUE 24 CARACTERES";
        }
        if (RepositorioUsuario::nombre_existe($conexion, $nombre)) {
            return "ESTE NOMBRE DE USUARIO YA ESTA EN USO";
        }
        return "";
    }

    protected function validar_email($conexion, $email)
    {
        if (!$this->variable_iniciada($conexion, $email)) {
            return "DEBES ESCRIBIR UN NOMBRE DE USUARIO";
        } else {
            $this->email = $email;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Esta dirección de correo ($email) es inválida.";
        }
        if (RepositorioUsuario::email_existe($conexion, $email)) {
            return "ESTE EMAIL  YA ESTA EN USO";
        }
        return "";
    }


    protected function validar_estado($estado)
    {
        if (!$this->variable_iniciada($estado)) {
            return "DEBES SELECCIONAR UN ESTADO DE USUARIO";
        } else {
            $this->estado = $estado;
        }
        return "";
    }

    protected function validar_tipo($tipo)
    {
        if (!$this->variable_iniciada($tipo)) {
            return "DEBES SELECCIONAR UN TIPO DE USUARIO";
        } else {
            $this->tipo = $tipo;
        }
        return "";
    }

    protected function validar_clave($clave)
    {
        if (!$this->variable_iniciada($clave)) {
            return "DEBES ESCRIBIR UNA CLAVE";
        }
        return "";
    }

    protected function validar_clave2($clave, $clave2)
    {
        if (!$this->variable_iniciada($clave)) {
            return "PRIMERO DEBES RELLENAR LA CLAVE";
        }
        if (!$this->variable_iniciada($clave2)) {
            return "DEBES REPETIR TU CLAVE";
        }
        if ($clave !== $clave2) {
            return "AMBAS CLAVES DEBEN SER IGUALES";
        }
        return "";
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getError_nombre()
    {
        return $this->error_nombre;
    }

    public function getError_email()
    {
        return $this->error_email;
    }

    public function getError_clave()
    {
        return $this->error_clave;
    }

    public function getError_clave2()
    {
        return $this->error_clave2;
    }

    public function getError_estado()
    {
        return $this->error_estado;
    }

    public function getError_tipo()
    {
        return $this->error_tipo;
    }

    public function mostrar_nombre()
    {
        if ($this->nombre !== "") {
            echo 'value="' . $this->nombre . '"';
        }
    }

    public function mostrar_error_nombre()
    {
        if ($this->error_nombre !== "") {
            echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave()
    {
        if ($this->error_clave !== "") {
            echo $this->aviso_inicio . $this->error_clave . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave2()
    {
        if ($this->error_clave2 !== "") {
            echo $this->aviso_inicio . $this->error_clave2 . $this->aviso_cierre;
        }
    }

    public function mostrar_email()
    {
        if ($this->email !== "") {
            echo 'value="' . $this->email . '"';
        }
    }

    public function mostrar_error_email()
    {
        if ($this->error_email !== "") {
            echo $this->aviso_inicio . $this->error_email . $this->aviso_cierre;
        }
    }

    public function mostrar_estado()
    {
        if ($this->estado !== "") {
            echo 'value="' . $this->estado . '"';
        }
    }

    public function mostrar_estado2()
    {
        if ($this->estado !== "") {
            echo  $this->estado;
        }
    }

    public function mostrar_tipo()
    {
        if ($this->tipo !== "") {
            echo 'value="' . $this->tipo . '"';
        }
    }

    public function mostrar_tipo2()
    {
        if ($this->tipo !== "") {
            echo  $this->tipo;
        }
    }

    public function mostrar_error_tipo()
    {
        if ($this->error_tipo !== "") {
            echo $this->aviso_inicio . $this->error_tipo . $this->aviso_cierre;
        }
    }

    public function mostrar_error_estado()
    {
        if ($this->error_estado !== "") {
            echo $this->aviso_inicio . $this->error_estado . $this->aviso_cierre;
        }
    }

    public function registro_validado()
    {
        if (
            $this->error_nombre === "" &&
            $this->error_clave === "" &&
            $this->error_clave2 === "" &&
            $this->error_email === "" &&
            $this->error_estado === "" &&
            $this->error_tipo === ""
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function registro_validado_mod()
    {
        if (
            $this->error_nombre === "" &&
            $this->error_email === "" &&
            $this->error_estado === "" &&
            $this->error_tipo === ""
        ) {
            return true;
        } else {
            return false;
        }
    }
}
