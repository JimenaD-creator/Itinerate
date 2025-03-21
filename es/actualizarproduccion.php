<?php
include("conexionbd.php");
$toro=($_POST['toro']);
$mes=($_POST['mes']);
$litros=($_POST['litros']);
$porcen_grasa=($_POST['porcentaje']);
$kggrasa=($_POST['kilos']);
$consulta="UPDATE produccion SET mes='$mes', litros='$litros', porcentaje='$porcen_grasa', kilos='$kggrasa' WHERE toro='$toro'";
if(mysqli_query($conex, $consulta)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido actualizado");';
    echo 'window.location="mostrarproduccion.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al actualizar el registro");';
    echo 'window.location="mostrarproduccion.php";';
    echo'</script>'; 
}
?>