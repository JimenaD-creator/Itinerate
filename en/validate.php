<?php
include("connectiondb.php");
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$query="SELECT usuario, password FROM usuarios WHERE
 usuario = '$usuario' AND password='$password'";
$result= $conex-> query($query);
if($result-> num_rows==1){
    $_SESSION['usuario'] = $usuario;
    echo '<script lenguage="javascript">';
    echo 'alert ("WELCOME!!!!");';
    echo 'window.location="home.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("ERROR. INCORRECT DATA");';
    echo 'window.location="login.php";';
    echo'</script>';
}
?>