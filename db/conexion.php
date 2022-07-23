<?php

class ApptivaDB{

private $host ="localhost"; // Dirección o IP del servidor MySQL
private $usuario="root"; // Nombre de usuario del servidor MySQL
private $clave =""; // Contraseña del usuario
private $db ="login"; // Nombre de la base de datos

public $conexion;

public function __construct(){
$this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
$this->conexion->set_charset("utf8");
}

// Insertar Datos
//----------------------
public function insertar($tabla, $datos){
$resultado = $this->conexion->query("INSERT INTO $tabla VALUES (null,$datos)") or die($this->conexion->error);
if($resultado)
return true;
return false;
}

// Borrar Datos
//----------------------
public function borrar($tabla, $condicion){
$resultado = $this->conexion->query("DELETE FROM $tabla WHERE $condicion") or die($this->conexion->error);
if($resultado)
return true;
return false;
}

// Actualizar Datos
//-------------------------
public function actualizar($tabla, $campos, $condicion){
    $resultado = $this->conexion->query("UPDATE $tabla SET $campos WHERE $condicion") or die($this->conexion->error);
    if($resultado)
    return true;
    return false;
    }

    // Buscar Datos
    //-------------------------
    public function buscar($tabla, $condicion){
    $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
    if($resultado)
    return $resultado->fetch_all(MYSQLI_ASSOC);
    return false;
    }

    // Buscar Datos DE FORMA DESCENDENTES Y OBTENER EL PRIMERO
    //-------------------------
    public function buscar2(){
        $resultado = $this->conexion->query("SELECT id, nombre, pais, edad FROM personas ORDER BY id DESC LIMIT 1") or die($this->conexion->error);
        if($resultado)
        return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
        }
    } // Cerrar la Clase
    $conexion = NULL;
    ?>