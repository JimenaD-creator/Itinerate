<?php
include ("connectiondb.php");
$idmes=$_GET['idmes'];
$sql="DELETE FROM ganancias WHERE idmes='$idmes'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("The record has been deleted");';
    echo 'window.location="showgains.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error deleting record");';
    echo 'window.location="showgains.php";';
    echo'</script>'; 
}
?>