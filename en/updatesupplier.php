<?php
include("connectiondb.php");
$id=($_POST['id']);
$nom=($_POST['nombre']);
$municipio=($_POST['municipio']);
$propietario=($_POST['propietario']);
$telprop=($_POST['telefonopropietario']);
$teloficina=($_POST['teloficina']);
$consulta="UPDATE lugarproduccion SET nombre='$nom', municipio='$municipio', propietario='$propietario', telefonopropietario='$telprop', teloficina='$teloficina' WHERE id='$id'";
if(mysqli_query($conex, $consulta)){
    echo '<script lenguage="javascript">';
    echo 'alert ("The record has been updated");';
    echo 'window.location="showsupplier.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error updating record");';
    echo 'window.location="showsupplier.php";';
    echo'</script>'; 
}
?>


