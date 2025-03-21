<?php
include("conexionbd.php");
$idmes=$_GET['idmes'];
?>
<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>ACTUALIZAR</title>
        <link rel="stylesheet" href="ganancias.css">
        <style>
            .box{
	  width:540px;
	  height:830px;
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
	  margin-top: 20px;
	  border-radius: 30px;
	  font-size: 22px;
  }

        </style>
    </head>
    <body>
    <div class="box">
    <div class="form_top action">
        <h1 align="center"><font face="Candara" size="15" color="white">Actualizar datos</font></h1><hr>
        <form class="register" action="actualizarganancias.php" method="POST">
            <?php
            $resultado=mysqli_query($conex, "SELECT *FROM ganancias WHERE idmes='$idmes'");
            while($row=mysqli_fetch_array($resultado)){
                echo "<input type='hidden' name='idmes'
                value='{$row['idmes']}'><br>";
                echo "<font face='Kristen ITC'><label class='controls' >Fecha:</label><br> <input class='cajas'type='date' name='fecha'
                value='{$row['fecha']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls'>Cantidad de litros vendidos:</label> <input class='cajas' type='text' name='litros'
                value='{$row['litros']}''required></font> <br>";
                echo "<font face='Kristen ITC'><label class='controls'>Empresa compradora:</label><input class='cajas' type='text' name='empresa'
                value='{$row['empresa']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls'>Precio por litro $:</label><input class='cajas'type='text' name='precio'
                value='{$row['precio']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls'>Cantidad total recibida $:</label><input class='cajas'type='text' name='pagtotal'
                value='{$row['pagtotal']}''required></font>";
                echo "<br>";
                echo "<br>";
                echo "<button class='btn_submit' type='submit'>Actualizar datos</button>";
            }?>
        </form>
    </div>
    </div>
    </body>
</html>