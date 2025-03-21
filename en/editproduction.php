<?php
include("connectiondb.php");
$toro=$_GET['toro'];
?>
<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>UPDATE</title>
        <link rel="stylesheet" href="production.css">
        <style>
            .b{
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
	  margin-top: -50px;
	  border-radius: 30px;
	  font-size: 22px;
  }

        </style>
    </head>
    <body>
    <div class="b">
    <div class="form_top action">
    <h1 align="center"><font face="Candara" size="15" color="white">Update data</h1><hr>
        <form class="register" action="updateproduction.php" method="POST">
            <?php
            $resultado=mysqli_query($conex, "SELECT *FROM produccion WHERE toro='$toro'");
            while($row=mysqli_fetch_array($resultado)){
                echo "<input type='hidden' name='toro'
                value='{$row['toro']}'> <br>";
                echo "<font face='Kristen ITC'><label class='controls' >Month:</label> <select class='cajas' name='mes'>
                <option>Select a month</option>
                <option value='January'>January</option>
                <option value='February>February</option>
                <option value='March'>March</option>
                <option value='April'>April</option>
                <option value='May'>May</option>
                <option value='June'>June</option>
                <option value='July'>July</option>
                <option value='August'>August</option>
                <option value='September'>September</option>
                <option value='October'>October</option>
                <option value='November'>November</option>
                <option value='December'>December</option>
                </select></font><br> ";
                echo "<font face='Kristen ITC'><label class='controls' >Number of liters of milk per cow: <input class='cajas' type='text' name='litros'
                value='{$row['litros']}''required></font> <br>";
                echo "<font face='Kristen ITC'><label class='controls' >%  fat: <input class='cajas' type='text' name='porcentaje'
                value='{$row['porcentaje']}''required></font> <br>";
                echo "<font face='Kristen ITC'><label class='controls' >kg of fat: <input class='cajas' type='text' name='kilos'
                value='{$row['kilos']}''required></font> <br>";
                echo "<br>";
                echo "<br>";
                echo "<button class='btn_submit' type='submit'>Update data</button>";
            }?>
        </form>
    </div>
    </div>
    </body>
</html>