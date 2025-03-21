<?php
include("conexionbd.php");
$id=($_POST['id']);
$nom=($_POST['nombre']);
$municipio=($_POST['municipio']);
$propietario=($_POST['propietario']);
$telprop=($_POST['telefonopropietario']);
$teloficina=($_POST['teloficina']);
$consulta="UPDATE lugarproduccion SET nombre='$nom', municipio='$municipio', propietario='$propietario', telefonopropietario='$telprop', teloficina='$teloficina' WHERE id='$id'";
if(mysqli_query($conex, $consulta)){
    echo '<script lenguage="javascript">';
    echo 'alert ("El registro ha sido actualizado");';
    echo 'window.location="mostrarproveedor.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error al actualizar el registro");';
    echo 'window.location="mostrarproveedor.php";';
    echo'</script>'; 
}
?>


