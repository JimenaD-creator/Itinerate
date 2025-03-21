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
        $sql = "SELECT *FROM ganancias";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
        <a href="ganancias.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insertar registro"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td  colspan="8" valing="middle" align="center" bgcolor="darkcyan"><font size="5">Ganancias por venta de leche</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>ID del mes</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Fecha</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Cantidad de litros vendidos</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Empresa compradora</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Precio por litro $</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Cantidad total de dinero recibido $</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Eliminar registros</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Editar registros</b></th>
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
                <td valing="middle" align="center" ><a href="eliminarganancias.php?idmes=<?php echo $row['idmes']?>"><button class="delete">Eliminar</button></a></font></td>
                <td valing="middle" align="center" ><a href="editarganancias.php?idmes=<?php echo $row['idmes']?>"><button class="edit">Editar</button></a></font></td>
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
