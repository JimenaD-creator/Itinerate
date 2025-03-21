<?php
include ("conexionbd.php");
$idmes=$_GET['idmes'];
$sql="DELETE FROM ganancias WHERE idmes='$idmes'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido eliminado");';
    echo 'window.location="mostrarganancias.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al eliminar el registro");';
    echo 'window.location="mostrarganancias.php";';
    echo'</script>'; 
}
?>