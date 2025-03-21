<?php
$servidor="sql113.byethost24.com";
$usuario="b24_31951025";
$contraseña="13DJLOL";
$bd="b24_31951025_itinerate";
$conex=new mysqli($servidor, $usuario, $contraseña, $bd);
if($conex->connect_error){
    die ("Error al conectar al servidor". $conex->connect_error);
}
?>