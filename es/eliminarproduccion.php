<?php
include ("conexionbd.php");
$toro=$_GET['toro'];
$sql="DELETE FROM produccion WHERE toro='$toro'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido eliminado");';
    echo 'window.location="mostrarproduccion.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al eliminar el registro");';
    echo 'window.location="mostrarproduccion.php";';
    echo'</script>'; 
}
?>