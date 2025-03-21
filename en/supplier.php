<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>SUPPLIER</title>
        <link rel="stylesheet" href="supplier.css">
    </head>
    <body>
    <div class="container">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">Supplier site</font></h3><hr><br>
        <form class="lugar" action="registersupplier.php" method="POST">
        <div align="center"><br>
        <div>
      <font face="Kristen ITC"><label class="controls1"for="name_user">Supplier name: </label></font><br>
      <input class="cajas" type="text" name="nomlugar" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Municipality:</label> </font><br>
        <input class="cajas" type="text" name="municipio" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Owner: </label></font><br>
        <input class="cajas" type="text" name="propietario" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Owner phone: </label></font>
        <input class="cajas" type="text" name="telefono" required="">
        </div>
        <div>
        <font face="Kristen ITC"><label class="controls"for="name_user">Office phone: </label></font>
        <input class="cajas" type="text" name="teloficina" required="">
        </div>
        <div>
            <input class="btn_submit" type="submit" name="enviar" value="Save">
        </div>  
        <div> 
            <input class="btn_reset" type="reset" value="Clear">
        </div>
        </div>
    </div>
    </div>
        </form>
    </body>
</html>