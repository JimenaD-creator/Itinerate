<?php
include ("conexionbd.php");
$id=$_GET['id'];
$sql="DELETE FROM lugarproduccion WHERE id='$id'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido eliminado");';
    echo 'window.location="mostrarproveedor.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al eliminar el registro");';
    echo 'window.location="mostrarproveedor.php";';
    echo'</script>'; 
}
?>
