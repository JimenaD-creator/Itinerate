<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>PROVEEDOR</title>
        <link rel="stylesheet" href="proveedor.css">
    </head>
    <body>
    <div class="container">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">Sitio proveedor</font></h3><hr><br>
        <form class="lugar" action="registrarproveedor.php" method="POST">
        <div align="center"><br>
        <div>
      <font face="Kristen ITC"><label class="controls1"for="name_user">Nombre del proveedor: </label></font>
      <input class="cajas" type="text" name="nomlugar" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Municipio:</label> </font>
        <input class="cajas" type="text" name="municipio" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Propietario: </label></font>
        <input class="cajas" type="text" name="propietario" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Teléfono del propietario: </label></font>
        <input class="cajas" type="text" name="telefono" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Teléfono de oficina: </label></font>
        <input class="cajas" type="text" name="teloficina" required="">
        </div>
        <div>
            <input class="btn_submit" type="submit" name="enviar" value="Guardar">
        </div>  
        <div> 
            <input class="btn_reset" type="reset" value="Limpiar">
        </div>
        </div>
    </div>
    </div>
        </form>
    </body>
</html>