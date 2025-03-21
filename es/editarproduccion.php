<?php
include("conexionbd.php");
$toro=$_GET['toro'];
?>
<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>ACTUALIZAR</title>
        <link rel="stylesheet" href="produccion.css">
        <style>
            .b{
	  width:540px;
	  height:700px;
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
	  margin-top: -10px;
	  border-radius: 30px;
	  font-size: 22px;
  }

        </style>
    </head>
    <body>
    <div class="b">
    <div class="form_top action">
        <h1 align="center"><font face="Candara" size="15" color="white">Actualizar datos</h1><hr>
        <form class="register" action="actualizarproduccion.php" method="POST">
            <?php
            $resultado=mysqli_query($conex, "SELECT *FROM produccion WHERE toro='$toro'");
            while($row=mysqli_fetch_array($resultado)){
                echo "<input type='hidden' name='toro'
                value='{$row['toro']}'>";
                echo "<font face='Kristen ITC'><label class='controls' >Mes:</label> <select class='cajas' name='mes'>
                <option>Selecciona un mes</option>
                <option value='Enero'>Enero</option>
                <option value='Febrero>Febrero</option>
                <option value='Marzo'>Marzo</option>
                <option value='Abril'>Abril</option>
                <option value='Mayo'>Mayo</option>
                <option value='Junio'>Junio</option>
                <option value='Julio'>Julio</option>
                <option value='Agosto'>Agosto</option>
                <option value='Septiembre'>Septiembre</option>
                <option value='Octubre'>Octubre</option>
                <option value='Noviembre'>Noviembre</option>
                <option value='Diciembre'>Diciembre</option>
                </select></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >No. de litros de leche por vaca: </label><input  class='cajas' type='text' name='litros'
                value='{$row['litros']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >%  grasa: </label><input  class='cajas' type='text' name='porcentaje'
                value='{$row['porcentaje']}''required></font><br>";
                echo "<font face='Kristen ITC'><label class='controls' >kg de grasa: </label><input  class='cajas' type='text' name='kilos'
                value='{$row['kilos']}''required></font>";
                echo "<br>";
                echo "<br>";
                echo "<button class='btn_submit' type='submit'>Actualizar datos</button>";
            }?>
        </form>
    </div>
    </div>
    </body>
</html>