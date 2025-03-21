<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="vaca.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
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
include("connectiondb.php");
if(isset($_POST['enviar'])){
    $mes=($_POST['mes']);
    $litros=($_POST['litros']);
    $porcen_grasa=($_POST['porcengrasa']);
    $kggrasa=($_POST['kgrasa']);
$consulta="INSERT INTO produccion (mes,litros,porcentaje,kilos) VALUES ('$mes', '$litros', '$porcen_grasa', '$kggrasa')";
$resultado=mysqli_query($conex, $consulta);
if($resultado){
    ?>
    <body  background="atar.jpg" style="background-size: cover">
    <header class="header">
    <form action="showproduction.php" method="POST">
    <h1 ><font face="Century Gothic">Record saved successfully</font></h1>
    </header><br><br>
    <div align="center"><input class="show" type="submit" value="Show records"></div>
    </form>
    </body>
    <?php
}else{
    ?>
    <h1 align="center"><font face="Candara">Error saving record</font></h1>
    <?php
}
}
?>
</body>
</html>
