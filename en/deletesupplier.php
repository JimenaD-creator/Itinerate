<?php
include ("connectiondb.php");
$id=$_GET['id'];
$sql="DELETE FROM lugarproduccion WHERE id='$id'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("The record has been deleted");';
    echo 'window.location="showsupplier.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error deleting record");';
    echo 'window.location="showsupplier.php";';
    echo'</script>'; 
}
?>
