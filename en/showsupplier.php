<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>RECORDS TABLE</title>
        <<link rel="stylesheet" href="table.css">
    </head>
    <body background="field.jpg" style="background-size: cover">
        <?php
        //Obtenemos la conexion a la base de datos
        include("connectiondb.php");
        //Crear una consulta para obtener todos los registros de la tabla
        $sql = "SELECT *FROM lugarproduccion";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
        <a href="supplier.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insert record"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td bgcolor="#009999" colspan="8" valing="middle" align="center"><font size="5">Supplier site data</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>ID</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Supplier name</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Municipality</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Owner</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Owner phone</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Office phone</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Delete records</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Edit records</b></th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td valing="middle" align="center" ><?php echo $row ['id']?></td>
                <td valing="middle" align="center" ><?php echo $row ['nombre']?></td>
                <td valing="middle" align="center" ><?php echo $row ['municipio']?></td>
                <td valing="middle" align="center" ><?php echo $row ['propietario']?></td>
                <td valing="middle" align="center" ><?php echo $row ['telefonopropietario']?></td>
                <td valing="middle" align="center" ><?php echo $row ['teloficina']?></td> 
                <td valing="middle" align="center" ><a href="deletesupplier.php?id=<?php echo $row['id']?>"><button class="delete">Delete</button></a></font></td>
                <td valing="middle" align="center" ><a href="editsupplier.php?id=<?php echo $row['id']?>"><button class="edit">Edit</button></a></font></td>
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