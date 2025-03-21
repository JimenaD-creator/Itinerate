<?php
include("conexionbd.php");
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$query="SELECT usuario, password FROM usuarios WHERE
 usuario = '$usuario' AND password='$password'";
$result= $conex-> query($query);
if($result-> num_rows==1){
    $_SESSION['usuario'] = $usuario;
    echo '<script lenguage="javascript">';
    echo 'alert ("BIENVENID@ !!!!");';
    echo 'window.location="menu.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("ERROR. DATOS INCORRECTOS");';
    echo 'window.location="iniciarsesion.php";';
    echo'</script>';
}
?>