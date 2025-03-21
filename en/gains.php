<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>GAINS</title>
        <link rel="stylesheet" href="gains.css">
</head>
    <body>
    <div class="box">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">GAINS $</font></h3><hr><br>
        <form class="register"action="registergains.php" method="POST">
        <div align="center">
            <div>
           <font face="Kristen ITC">
               <label class="controls">Date: </label></font><br>
               <input class="cajas" type="date" name="fecha">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls"> Number of liters sold:</label></font>
            <input class="cajas" type="text" name="litros" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Buying company:</label></font>
            <input class="cajas" type="text" name="empresa" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Price per liter$:</label></font>
            <input class="cajas" type="text" name="precio" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Total amount received $:</label></font>
           <input class="cajas" type="text" name="pagtotal" required="">
           </div>
           <div>
            <input class="btn_submit" type="submit" name="enviar" value="Save">
           </div> 
           <div>
            <input class="btn_reset" type="reset" value="Clear">
           </div>
        </div>
        </form>
    </div>
    </div>
    </body>
</html>