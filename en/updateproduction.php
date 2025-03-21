<?php
include("connectiondb.php");
$toro=($_POST['toro']);
$mes=($_POST['mes']);
$litros=($_POST['litros']);
$porcen_grasa=($_POST['porcentaje']);
$kggrasa=($_POST['kilos']);
$consulta="UPDATE produccion SET mes='$mes', litros='$litros', porcentaje='$porcen_grasa', kilos='$kggrasa' WHERE toro='$toro'";
if(mysqli_query($conex, $consulta)){
    echo '<script lenguage="javascript">';
    echo 'alert ("The record has been updated");';
    echo 'window.location="showproduction.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error updating record");';
    echo 'window.location="showproduction.php";';
    echo'</script>'; 
}
?>