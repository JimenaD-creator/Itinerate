<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>TABLA DE REGISTROS</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <body background="field.jpg" style="background-size: cover">
        <?php
        //Obtenemos la conexion a la base de datos
        include("conexionbd.php");
        //Crear una consulta para obtener todos los registros de la tabla
        $sql = "SELECT *FROM produccion";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
        <a href="produccion.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insertar registro"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td  colspan="7" valing="middle" align="center" bgcolor="darkcyan"><font size="5">Producción de litros de leche</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>ID del toro</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Mes</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>No. de litros de leche producidos</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>% de grasa</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>kg de grasa</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Eliminar registros</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Editar registros</b></th>
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
                <td valing="middle" align="center" ><a href="eliminarproduccion.php?toro=<?php echo $row['toro']?>"><button class="delete">Eliminar</button></a></td>
                <td valing="middle" align="center" ><a href="editarproduccion.php?toro=<?php echo $row['toro']?>"><button class="edit">Editar</button></a></td>
            </tr>      
        <?php
        }
        ?>
        </div>
        </table><br><br>
        <form action="menu.php" method="POST">
            <div align="center"><input class="return" type="submit" value="Volver al inicio"></div>
         </form>     
    </body>
</html>
