<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>PRODUCCIÓN</title>
        <link rel="stylesheet" href="produccion.css">
    </head>
    <body>
    <div class="b">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">Producción</font></h3><hr><br>
        <form class="lugar" action="registrarproduccion.php" method="POST">
            <div align="center">
            <div>
            <font face="Kristen ITC" size="4">
            <label class="controls">Mes:</label></font><br>
            <select class="cajas" name="mes" required="">
                    <option>Selecciona un mes</option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
            </select></font></div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls">No. de litros de leche por vaca: </label></font>
            <input class="cajas" type="text" name="litros" required="">
            </div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls">% grasa: </label></font>
            <input class="cajas" type="text" name="porcengrasa" required="">
            </div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls"> Kg de grasa:</label></font>
            <input class="cajas" type="text" name="kgrasa" required="">
            </div>
            <div>
            <input class="btn_submit" type="submit" name="enviar" value="Guardar"> 
            </div>
            <div>
            <input class="btn_reset" type="reset" value="Limpiar">
            </div>
            </div>
        </form>
    </body>
</html>