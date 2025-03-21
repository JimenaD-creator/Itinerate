<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>RECORDS TABLE</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <body background="field.jpg" style="background-size: cover">
        <?php
        //Obtenemos la conexion a la base de datos
        include("connectiondb.php");
        //Crear una consulta para obtener todos los registros de la tabla
        $sql = "SELECT *FROM produccion";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
         <a href="production.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insert record"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td  colspan="7" valing="middle" align="center" bgcolor="darkcyan"><font size="5">Production of liters of milk</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Bull ID</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Month</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Number of liters of milk produced</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>% of fat</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>kg of fat</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Delete records</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Edit records</b></th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td valing="middle" align="center" ><?php echo $row ['toro']?></td>
                <td valing="middle" align="center" ><?php echo $row ['mes']?></td>
                <td valing="middle" align="center" ><?php echo $row ['litros']?></td>
                <td valing="middle" align="center" ><?php echo $row ['porcentaje']?></td>
                <td valing="middle" align="center" ><?php echo $row ['kilos']?></td> 
                <td valing="middle" align="center" ><a href="deleteproduction.php?toro=<?php echo $row['toro']?>"><button class="delete">Delete</button></a></td>
                <td valing="middle" align="center" ><a href="editproduction.php?toro=<?php echo $row['toro']?>"><button class="edit">Edit</button></a></td>
            </tr>      
        <?php
        }
        ?>
        </div>
        </table><br><br>
        <form action="home.php" method="POST">
            <div align="center"><input class="return" type="submit" value="Back to home"></div>
         </form>     
    </body>
</html>
