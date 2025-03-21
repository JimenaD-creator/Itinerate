<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="vaca.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
</head>
<style>
    .header{
    margin-top: 0;
    background-color:#642EFE;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem 2rem;

}
.show{
    border-style: solid;
    color: white;
    padding: 10px 20px;
    margin-bottom:24px;
	margin-top: 0px;
    margin-right: 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 260px;
    height: 60px;
    border-radius: 20px; 
    background-color:midnightblue; font-size: 20px; border-color: midnightblue; 
}
h1{
    margin-left: 400px;
    text-align: center;
    color: white;
}
</style>
<body>

<?php
include("conexionbd.php");
if(isset($_POST['registro'])){
    $usuario=($_POST['usuario']);
    $contraseña=($_POST['password']);
$consulta="INSERT INTO usuarios (usuario, password) VALUES ('$usuario','$contraseña')";
$resultado=mysqli_query($conex, $consulta);
if($resultado){
    ?>
    <body background="regusers.jpg" style="background-size: cover">
    <header class="header">
    <form action="iniciarsesion.php" method="POST">
    <h1 align="center"><font face="Century Gothic">Registro almacenado correctamente</font></h1>
    </header><br><br>
    <div align="center"><input class="show" type="submit" value="Iniciar sesión"></div>
    </form>
    </body>
    <?php
}else{
    ?>
    <h1 align="center"><font face="Candara">Error al guardar el registro</font></h1>
    <?php
}

}
?>
</body>
</html>