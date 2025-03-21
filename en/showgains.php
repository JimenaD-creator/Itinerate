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
        $sql = "SELECT *FROM ganancias";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
         <a href="gains.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insert record"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td  colspan="8" valing="middle" align="center" bgcolor="darkcyan"><font size="5">Gains from milk sales</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Month ID</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Date</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Number of liters sold</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Buying company</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Price per liter $</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Total amount received $</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Delete records</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Edit records</b></th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td valing="middle" align="center" ><?php echo $row ['idmes']?></font></td>
                <td valing="middle" align="center" ><?php echo $row ['fecha']?></font></td>
                <td valing="middle" align="center" ><?php echo $row ['litros']?></font></td>
                <td valing="middle" align="center" ><?php echo $row ['empresa']?></font></td>
                <td valing="middle" align="center" ><?php echo $row ['precio']?></font></td>
                <td valing="middle" align="center" ><?php echo $row ['pagtotal']?></font></td>
                <td valing="middle" align="center" ><a href="deletegains.php?idmes=<?php echo $row['idmes']?>"><button class="delete">Delete</button></a></font></td>
                <td valing="middle" align="center" ><a href="editgains.php?idmes=<?php echo $row['idmes']?>"><button class="edit">Edit</button></a></font></td>
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
