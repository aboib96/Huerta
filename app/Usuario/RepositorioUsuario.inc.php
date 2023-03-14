<?php
class RepositorioUsuario {

    public static function obtener_todos($conexion) {
        $usuarios = array();
        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';
                $sql = "SELECT * FROM usuarios";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                                $fila['idUsuario'], 
                                $fila['nombreUsuario'], 
                                $fila['claveUsuario'],
                                $fila['emailUsuario'], 
                                $fila['estadoUsuario'], 
                                $fila['perfilUsuario']
                        );
                    }
                } else {
                    print 'NO HAY USUARIOS';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuarios;
    }
    public static function obtener_numero_usuario($conexion) {
        $total_usuarios = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total FROM usuarios";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $total_usuarios;
    }

    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO usuarios(nombreUsuario,claveUsuario,emailUsuario,estadoUsuario,perfilUsuario) "
                        . "VALUES(:nombre,:clave,:email,:estado,:perfil)";

                $sentencia = $conexion->prepare($sql);
                
                $nombre = $usuario->obtenerNombre();
                $clave = $usuario->obtenerClave();
                $email = $usuario->obtenerEmail();
                $estado = $usuario->obtenerEstado();
                $perfil = $usuario->obtenerPerfil();

                $usuario_insertado = $sentencia->execute(array(":nombre" => $nombre, ":clave" => $clave,":email" => $email,":estado" => $estado, ":perfil" => $perfil));
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario_insertado;
    }

    public static function nombre_existe($conexion, $nombre) {
        $nombre_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios where nombreUsuario = :nombre";
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                
                $sentencia-> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado)){
                    $nombre_existe = true;
                } else {
                    $nombre_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        
        return $nombre_existe;
    }

    public static function email_existe($conexion, $email) {
        $email_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios where emailUsuario = :email";
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                
                $sentencia-> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado)){
                    $email_existe = true;
                } else {
                    $email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        
        return $email_existe;
    }

    public static function obtener_usuario($conexion, $usuario){
        $usuarios = null;
        if(isset($conexion)){
            try {
                include_once 'Usuario.inc.php';
                $sql = "SELECT * FROM usuarios where nombreUsuario = :usuario";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':usuario', $usuario, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                if(!empty($resultado)){
                    $usuarios = new Usuario($resultado['idUsuario'],
                            $resultado['nombreUsuario'],
                            $resultado['claveUsuario'],
                            $resultado['emailUsuario'],
                            $resultado['estadoUsuario'],
                            $resultado['perfilUsuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuarios;
    }
    public static function obtener_id_usuario($conexion, $nombre) {
        $id_usuarios = null;
        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';
                $sql = "SELECT idUsuario as id FROM usuarios where nombreUsuario= :nombre";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $id_usuarios = $resultado['id'];
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $id_usuarios;
    }
    public static function obtener_usuario_id($conexion, $usuario) {
        include_once 'Usuario.inc.php';
        $usuarios = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios WHERE idUsuario = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $usuario, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if(!empty($resultado)){
                    $usuarios = new Usuario($resultado['idUsuario'],
                            $resultado['nombreUsuario'],
                            $resultado['claveUsuario'],
                            $resultado['emailUsuario'],
                            $resultado['estadoUsuario'],
                            $resultado['perfilUsuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuarios;
    }
    public static function actualizar_usuario($conexion, $id, $nick, $email, $estado, $tipo) {
        $actualizacion_correcta = false;

        if (isset($conexion)) {
            try {
                $sql = "UPDATE usuarios SET nombreUsuario = :nick, emailUsuario= :email, estadoUsuario= :estado, perfilUsuario = :perfil WHERE idUsuario = :id";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nick'   , $nick     , PDO::PARAM_STR);
                $sentencia->bindParam(':estado' , $estado   , PDO::PARAM_STR);
                $sentencia->bindParam(':email' , $email   , PDO::PARAM_STR);
                $sentencia->bindParam(':perfil' , $tipo     , PDO::PARAM_STR);
                $sentencia->bindParam(':id'     , $id       , PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->rowCount();

                if ($resultado) {
                    $actualizacion_correcta = true;
                } else {
                    $actualizacion_correcta = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }
        }
        return $actualizacion_correcta;
    }
    public static function eliminar_usuario($conexion, $idUsuario) {
        if (isset($conexion)) {
            try {
                $conexion -> beginTransaction();

                $sql = "DELETE FROM usuarios WHERE idUsuario=:idUsuario";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':idUsuario', $idUsuario, PDO::PARAM_STR);
                $sentencia -> execute();

                $conexion -> commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
                $conexion -> rollBack();
            }
        }
    }
    public static function obtener_todos_usuario($conexion) {
        $usuarios = array();
        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';
                $sql = "SELECT *FROM usuarios";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                                $fila['idUsuario'], 
                                $fila['nombreUsuario'], 
                                $fila['claveUsuario'],
                                $fila['emailUsuario'],  
                                $fila['estadoUsuario'], 
                                $fila['perfilUsuario'] 
                        );
                    }
                } else {
                    print 'NO HAY USUARIOS';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuarios;
    }
}
