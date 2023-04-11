<?php

include_once 'app//Huerta//Huerta.inc.php';
class RepositorioHuerta
{

    public static function obtener_todos($conexion)
    {
        $huertas = array();
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cultivos";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $huertas[] = new Huerta(
                            $fila['idCultivo'],
                            $fila['iconoCultivo'],
                            $fila['imagenCultivo'],
                            $fila['nombreCultivo'],
                            $fila['descripcionCultivo'],
                            $fila['cientificoCultivo'],
                            $fila['tipoCultivo'],
                            $fila['germinaCultivo'],
                            $fila['cosecharCultivo'],
                            $fila['temporadaCultivo'],
                            $fila['macetaCultivo'],
                            $fila['climaCultivo'],
                            $fila['maximaCultivo'],
                            $fila['minimaCultivo'],
                            $fila['riegoCultivo'],
                            $fila['luzCultivo'],
                            $fila['alturaCultivo'],
                            $fila['sembrarCultivo'],
                            $fila['separacionCultivo'],
                            $fila['sueloCultivo'],
                            $fila['phCultivo'],
                            $fila['usuarioCultivo'],
                            $fila['fechaCultivo']
                        );
                    }
                } else {
                    print 'NO HAY CULTIVOS';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $huertas;
    }

    public static function insertar_huerta($conexion, $huerta)
    {
        
        $huerta_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO cultivos(
                                            iconoCultivo,
                                            imagenCultivo,
                                            nombreCultivo,
                                            descripcionCultivo,
                                            cientificoCultivo,
                                            germinaCultivo,
                                            cosecharCultivo,
                                            macetaCultivo,
                                            climaCultivo,
                                            maximaCultivo,
                                            minimaCultivo,
                                            riegoCultivo,
                                            luzCultivo,
                                            alturaCultivo,
                                            sembrarCultivo,
                                            separacionCultivo,
                                            phCultivo,
                                            tipoCultivo,
                                            temporadaCultivo,
                                            sueloCultivo,
                                            usuarioCultivo,
                                            fechaCultivo)"                                               
                                    . "VALUES(
                                            :icono,
                                            :imagen,
                                            :nombre,
                                            :descripcion,
                                            :cientifico,
                                            :germinacion,
                                            :cosecha,
                                            :maceta,
                                            :clima,
                                            :temperaturaMax,
                                            :temperaturaMin,
                                            :riego,
                                            :luz,
                                            :altura,
                                            :sembrarAlt,
                                            :separacion,
                                            :ph,
                                            :tipo,
                                            :temporada,
                                            :suelo,
                                            :usuario,
                                            :fecha)";                                           
                $sentencia = $conexion->prepare($sql);

                $icono = $huerta->obtenerIcono();
                $imagen = $huerta->obtenerImagen();
                $nombre = $huerta->obtenerNombre();
                $descripcion = $huerta->obtenerDescripcion();
                $cientifico = $huerta->obtenerCientifico();
                $tipo = $huerta->obtenerTipo();
                $germinacion = $huerta->obtenerGerminacion();
                $cosecha = $huerta->obtenerCosecha();
                $temporada = $huerta->obtenerTemporada();
                $maceta = $huerta->obtenerMaceta();
                $clima = $huerta->obtenerClima();
                $temperaturaMax = $huerta->obtenerTemperaturaMax();
                $temperaturaMin = $huerta->obtenerTemperaturaMin();
                $riego = $huerta->obtenerRiego();
                $luz = $huerta->obtenerLuz();
                $altura = $huerta->obtenerAltura();
                $sembrarAlt = $huerta->obtenerSembrarAlt();
                $separacion = $huerta->obtenerSeparacion();
                $suelo = $huerta->obtenerSuelo();
                $ph = $huerta->obtenerPh();
                $usuario = $huerta->obtenerUsuario();
                $fecha = $huerta->obtenerFecha();


                $huerta_insertado = $sentencia->execute(array(
                                                                ":icono" => $icono,
                                                                ":imagen" => $imagen,
                                                                ":nombre" => $nombre,
                                                                ":descripcion" => $descripcion,
                                                                ":cientifico" => $cientifico, 
                                                                ":germinacion" => $germinacion,
                                                                ":cosecha" => $cosecha,
                                                                ":maceta" => $maceta,
                                                                ":clima" => $clima,
                                                                ":temperaturaMax" => $temperaturaMax,
                                                                ":temperaturaMin" => $temperaturaMin,
                                                                ":riego" => $riego,
                                                                ":luz" => $luz,
                                                                ":altura" => $altura,
                                                                ":sembrarAlt" => $sembrarAlt,
                                                                ":separacion" => $separacion,
                                                                ":ph" => $ph, 
                                                                ":tipo" => $tipo, 
                                                                ":temporada" => $temporada, 
                                                                ":suelo" => $suelo,
                                                                ":usuario" => $usuario,
                                                                ":fecha" => $fecha));
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $huerta_insertado;
    }

    public static function huerta_existe($conexion, $nombre)
    {
        $huerta_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cultivos where nombreCultivo = :nombre";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $huerta_existe = true;
                } else {
                    $huerta_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $huerta_existe;
    }

    public static function cientifico_existe($conexion, $nombre)
    {
        $huerta_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cultivos where cientificoCultivo = :nombre";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $huerta_existe = true;
                } else {
                    $huerta_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $huerta_existe;
    }

    public static function obtener_huerta($conexion, $huerta)
    {
        $huertas = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cultivos where nombreCultivo = :huerta";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':huerta', $huerta, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                if (!empty($resultado)) {
                    $huertas = new Huerta(
                        $resultado['idCultivo'],
                        $resultado['iconoCultivo'],
                        $resultado['imagenCultivo'],
                        $resultado['nombreCultivo'],
                        $resultado['descripcionCultivo'],
                        $resultado['cientificoCultivo'],
                        $resultado['tipoCultivo'],
                        $resultado['germinaCultivo'],
                        $resultado['cosecharCultivo'],
                        $resultado['temporadaCultivo'],
                        $resultado['macetaCultivo'],
                        $resultado['climaCultivo'],
                        $resultado['maximaCultivo'],
                        $resultado['minimaCultivo'],
                        $resultado['riegoCultivo'],
                        $resultado['luzCultivo'],
                        $resultado['alturaCultivo'],
                        $resultado['sembrarCultivo'],
                        $resultado['separacionCultivo'],
                        $resultado['sueloCultivo'],
                        $resultado['phCultivo'],
                        $resultado['usuarioCultivo'],
                        $resultado['fechaCultivo']
                    );
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $huertas;
    }
    public static function obtener_id_huerta($conexion, $nombre)
    {
        $id_huertas = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT idCultivo as id FROM cultivos where nombreCultivo = :nombre";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $id_huertas = $resultado['id'];
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $id_huertas;
    }

    public static function actualizar_huerta($conexion,$id,$icono,$imagen,$nombre,$descripcion,$cientifico,$tipo,$germinacion,$cosecha,$temporada,$maceta,$clima,$temperaturaMax,$temperaturaMin,$riego,$luz,$altura,$sembrarAlt,$separacion,$suelo,$ph,$usuario,$fecha)
    {
        $actualizacion_correcta = false;

        if (isset($conexion)) {
            try {
                $sql = "UPDATE cultivos 
                        SET iconoCultivo = :icono, 
                            imagenCultivo = :imagen, 
                            nombreCultivo = :nombre,
                            descripcionCultivo = :descripcion,
                            cientificoCultivo = :cientifico,
                            germinaCultivo = :germinacion,
                            cosecharCultivo = :cosecha,
                            macetaCultivo = :maceta,
                            climaCultivo = :clima,
                            maximaCultivo = :temperaturaMax,
                            minimaCultivo = :temperaturaMin,
                            riegoCultivo = :riego,
                            luzCultivo = :luz,
                            alturaCultivo = :altura,
                            sembrarCultivo = :sembrarAlt,
                            separacionCultivo = :separacion,
                            phCultivo = :ph,
                            tipoCultivo = :tipo, 
                            temporadaCultivo = :temporada,
                            sueloCultivo = :suelo,
                            usuarioCultivo = :usuario,
                            fechaCultivo = :fecha
                        WHERE idCultivo  = :id";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':icono',$icono, PDO::PARAM_STR);
                $sentencia->bindParam(':imagen', $imagen, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                $sentencia->bindParam(':cientifico', $cientifico, PDO::PARAM_STR);
                $sentencia->bindParam(':germinacion', $germinacion, PDO::PARAM_STR);
                $sentencia->bindParam(':cosecha', $cosecha, PDO::PARAM_STR);
                $sentencia->bindParam(':maceta', $maceta, PDO::PARAM_STR);
                $sentencia->bindParam(':clima', $clima, PDO::PARAM_STR);
                $sentencia->bindParam(':temperaturaMax', $temperaturaMax, PDO::PARAM_STR);
                $sentencia->bindParam(':temperaturaMin', $temperaturaMin, PDO::PARAM_STR);
                $sentencia->bindParam(':riego', $riego, PDO::PARAM_STR);
                $sentencia->bindParam(':luz', $luz, PDO::PARAM_STR);
                $sentencia->bindParam(':altura', $altura, PDO::PARAM_STR);
                $sentencia->bindParam(':sembrarAlt', $sembrarAlt, PDO::PARAM_STR);
                $sentencia->bindParam(':separacion', $separacion, PDO::PARAM_STR);
                $sentencia->bindParam(':ph', $ph, PDO::PARAM_STR);
                $sentencia->bindParam(':tipo', $tipo, PDO::PARAM_STR);
                $sentencia->bindParam(':temporada', $temporada, PDO::PARAM_STR);
                $sentencia->bindParam(':suelo', $suelo, PDO::PARAM_STR);
                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);
                $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);

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
    public static function eliminar_huerta($conexion, $idCultivo )
    {
        if (isset($conexion)) {
            try {
                $conexion->beginTransaction();

                $sql = "DELETE FROM cultivos WHERE idCultivo =:idCultivo ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':idCultivo ', $idCultivo , PDO::PARAM_STR);
                $sentencia->execute();

                $conexion->commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
                $conexion->rollBack();
            }
        }
    }
    public static function obtener_todos_huerta($conexion)
    {
        $huertas = array();
        if (isset($conexion)) {
            try {
                $sql = "SELECT *FROM cultivos";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $huertas[] = new Huerta(
                            $fila['idCultivo'],
                            $fila['iconoCultivo'],
                            $fila['imagenCultivo'],
                            $fila['nombreCultivo'],
                            $fila['descripcionCultivo'],
                            $fila['cientificoCultivo'],
                            $fila['tipoCultivo'],
                            $fila['germinaCultivo'],
                            $fila['cosecharCultivo'],
                            $fila['temporadaCultivo'],
                            $fila['macetaCultivo'],
                            $fila['climaCultivo'],
                            $fila['maximaCultivo'],
                            $fila['minimaCultivo'],
                            $fila['riegoCultivo'],
                            $fila['luzCultivo'],
                            $fila['alturaCultivo'],
                            $fila['sembrarCultivo'],
                            $fila['separacionCultivo'],
                            $fila['sueloCultivo'],
                            $fila['phCultivo'],
                            $fila['usuarioCultivo'],
                            $fila['fechaCultivo']
                        );
                    }
                } else {
                    print 'NO HAY HUERTA';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $huertas;
    }
}
