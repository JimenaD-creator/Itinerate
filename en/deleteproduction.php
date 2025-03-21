<?php
include ("connectiondb.php");
$toro=$_GET['toro'];
$sql="DELETE FROM produccion WHERE toro='$toro'";
if (mysqli_query($conex, $sql)){
    echo '<script lenguage="javascript">';
    echo 'alert ("The record has been deleted");';
    echo 'window.location="showproduction.php";';
    echo'</script>';
}else{
    echo '<script lenguage="javascript">';
    echo 'alert ("Error deleting record");';
    echo 'window.location="showproduction.php";';
    echo'</script>'; 
}
?>