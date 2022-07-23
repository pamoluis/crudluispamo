<?php
include '../db/conexion.php';

$user=new ApptivaDB();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$pais = (isset($_POST['pais'])) ? $_POST['pais'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //nuevo
        $u=$user->Insertar("personas","'$nombre', '$pais', '$edad'");
        $u=$user->Buscar2();

        break;

    case 2: //modificación

        $u=$user->actualizar("personas","nombre='$nombre', pais='$pais', edad='$edad'","id ='$id'");
        $u=$user->Buscar("personas","id ='$id'");
        break;        
    case 3://eliminar
        $u=$user->borrar("personas","id ='$id'");                     
        break;        
}

print json_encode($u, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
