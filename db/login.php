<?php
session_start();

include "conexion.php";
$user=new ApptivaDB();

//recepcionamos los datos de ajax
$usuario=(isset($_POST['usuario'])) ? $_POST['usuario']: '';
$password=(isset($_POST['password'])) ? $_POST['password']: '';

$pass=md5($password);//encriptamos


$u=$user->Buscar("usuario","usuario = '$usuario' and password = '$pass'");

$c=0;

foreach($u as $v){
    $c=$c+1;
}


if($c<=0){
    $_SESSION["s_usuario"] = "null";
    $data = "null";
}else{
    $_SESSION["s_usuario"] =$usuario;
    $data = $u;
}

print json_encode($data);

?>