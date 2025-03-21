<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="proyecto2p";
$conex=new mysqli($servidor, $usuario, $contraseña, $bd);
if($conex->connect_error){
    die ("Error al conectar al servidor". $conex->connect_error);
}
?>