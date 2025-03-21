<?php
include("conexionbd.php");
$idmes=($_POST['idmes']);
$fecha=($_POST['fecha']);
$litros_vend=($_POST['litros']);
$empresa=($_POST['empresa']);
$precio=($_POST['precio']);
$pagtotal=($_POST['pagtotal']);
$consulta="UPDATE ganancias SET fecha='$fecha', litros='$litros_vend', empresa='$empresa', precio='$precio', pagtotal='$pagtotal' WHERE idmes='$idmes'";
if(mysqli_query($conex, $consulta)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido actualizado");';
    echo 'window.location="mostrarganancias.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al actualizar el registro");';
    echo 'window.location="mostrarganancias.php";';
    echo'</script>'; 
}
?>