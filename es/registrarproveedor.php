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
    background-color:#31B404;
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
// Incluimos el archivo de conexion de la base de datos
include("conexionbd.php");
if(isset($_POST['enviar'])){
    $nomlugar=($_POST['nomlugar']);
    $direccion=($_POST['municipio']);
    $propietario=($_POST['propietario']);
    $tel_prop=($_POST['telefono']);
    $tel_oficina=($_POST['teloficina']);
$consulta="INSERT INTO lugarproduccion (nombre,municipio,propietario,telefonopropietario,teloficina) VALUES ('$nomlugar', '$direccion', '$propietario', '$tel_prop', '$tel_oficina')";
$resultado=mysqli_query($conex, $consulta);
if($resultado){
    ?>
    <body background="atar.jpg" style="background-size: cover">
    <header class="header">
    <form action="mostrarproveedor.php" method="POST">
    <h1><font face="Century Gothic">Registro almacenado correctamente</font></h1>
    </header><br><br>
    <div align="center"><input  class="show" type="submit" value="Mostrar registros"></div>
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