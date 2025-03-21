<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>GANANCIAS</title>
        <link rel="stylesheet" href="ganancias.css">
</head>
    <body>
    <div class="box">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">Ganancias $</font></h3><hr><br>
        <form class="register"action="registrarganancias.php" method="POST">
        <div align="center">
            <div>
           <font face="Kristen ITC">
               <label class="controls">Fecha: </label></font><br>
               <input class="cajas" type="date" name="fecha">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls"> Cantidad de litros vendidos:</label></font>
            <input class="cajas" type="text" name="litros" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Empresa compradora:</label></font>
            <input class="cajas" type="text" name="empresa" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Precio por litro $:</label></font>
            <input class="cajas" type="text" name="precio" required="">
           </div>
           <div>
           <font face="Kristen ITC"><label class="controls">Cantidad total recibida $:</label></font>
           <input class="cajas" type="text" name="pagtotal" required="">
           </div>
           <div>
            <input class="btn_submit" type="submit" name="enviar" value="Guardar">
           </div> 
           <div>
            <input class="btn_reset" type="reset" value="Limpiar">
           </div>
        </div>
        </form>
    </div>
    </div>
    </body>
</html>