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
        $sql = "SELECT *FROM lugarproduccion";
        $query = mysqli_query($conex, $sql);
        ?>
        <?php
        //Con un ciclo while mostramos los datos obtenidos de la consulta
        ?>
        <a href="proveedor.php"><input style="background-color:#2E9AFE; border-color:#2E9AFE; margin-bottom:5px;"class="return" type="submit" value="Insertar registro"></a>
        <table border-collapse:collapse width="100%">
        <div id="main-container">
        <thead>
        <tr>
            <td bgcolor="#009999" colspan="8" valing="middle" align="center"><font size="5">Datos del sitio proveedor</font></td>
        </tr>
        </thead>
        <tr class="concept">
            <th valing="middle" align="center" bgcolor="#084B8A"><b>ID</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Nombre del proveedor</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Municipio</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Propietario</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Teléfono del propietario</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Teléfono de oficina</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Eliminar registros</b></th>
            <th valing="middle" align="center" bgcolor="#084B8A"><b>Editar registros</b></th>
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
                <td valing="middle" align="center" ><a href="eliminarproveedor.php?id=<?php echo $row['id']?>"><button class="delete">Eliminar</button></a></font></td>
                <td valing="middle" align="center" ><a href="editarproveedor.php?id=<?php echo $row['id']?>"><button class="edit">Editar</button></a></font></td>
            </tr>      
        <?php
        }
        ?>
        </div>
        </table><br><br>
        <form action="menu.php" method="POST">
        <div><center><input class="return" type="submit" value="Volver al inicio"></a></center></div>
        </form>
            
    </body>
</html>