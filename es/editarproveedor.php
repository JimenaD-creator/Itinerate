<?php
include("conexionbd.php");
$id=$_GET['id'];
?>
<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>ACTUALIZAR</title>
        <link rel="stylesheet" href="proveedor.css">
        <style>
            .container{
	  width:540px;
	  height:850px;
	  margin:auto;
	  margin-top:50px;
	  background-image:url(fondomarino.jpg);
	  background-size: cover;
	  padding:20px 30px;
	  border-top:4px solid #5DADE2;
	  border-radius:50px;
  }
  .controls{
	  width: 15%;
	  margin-bottom:18px;
	  padding:0px 0px;
	  font-size:22px;
	  margin-left:55px;
	  margin-top:10px;
	  color:white;
    
  }
  .controls1{
	  margin-top: 50px;
	  width: 15%;
	  margin-bottom:18px;
	  padding:0px 0px;
	  font-size:22px;
	  margin-left:50px;
	  color:white;
  }
  .cajas{
	  background-color:white;
	  width:75%;
	  margin-bottom:18px;
	  padding:0px, 0px;
	  height: 40px;
	  margin-left:55px;
	  margin-top:20px;
	  color:black;
	  font-size:20px;
	  font-family:'Segoe UI';
  }
  .btn_submit{
	  width:78%;
	  height:50px;
	  margin-bottom:24px;
	  background-color:yellow;
	  border:none;
	  margin-left:50px;
	  margin-top: -30px;
	  border-radius: 30px;
	  font-size: 22px;
  }

        </style>
    </head>
    <body>
    <div class="container">
    <div class="form_top action">
        <h1 align="center"><font face="Candara" size="15" color="white">Actualizar datos</h1><hr><br>
        <form class="register" action="actualizarproveedor.php" method="POST">
            <?php
            $resultado=mysqli_query($conex, "SELECT *FROM lugarproduccion WHERE id='$id'");
            while($row=mysqli_fetch_array($resultado)){
                echo "<input type='hidden' name='id'
                value='{$row['id']}'>";
                echo "<font face='Kristen ITC'><label class='controls1' >Nombre del proveedor:</label> <input class='cajas' type='text' name='nombre'
                value='{$row['nombre']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >Municipio:</label> <input class='cajas' type='text' name='municipio'
                value='{$row['municipio']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >Propietario:</label> <input class='cajas' type='text' name='propietario'
                value='{$row['propietario']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >Teléfono del propietario:</label> <input class='cajas' type='text' name='telefonopropietario'
                value='{$row['telefonopropietario']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >Teléfono de oficina:</label> <input class='cajas' type='text' name='teloficina'
                value='{$row['teloficina']}''required>";
                echo "<br>";
                echo "<br>";
                echo "<button class='btn_submit' type='submit'>Actualizar datos</button>";
            }?>
        </form>
    </div>
    </div>
    </body>
</html>