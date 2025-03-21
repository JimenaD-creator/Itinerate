<html>
    <head>
    <link rel="icon" href="vaca.png">
        <title>PRODUCTION</title>
        <link rel="stylesheet" href="production.css">
    </head>
    <body>
    <div class="b">
    <div class="form_top action">
        <h3 align="center"><font face="Candara" size="15" color="white">Production</font></h3><hr><br>
        <form class="lugar" action="registerproduction.php" method="POST">
            <div align="center">
            <div>
            <font face="Kristen ITC" size="4">
            <label class="controls">Month:</label></font><br>
            <select class="cajas" name="mes" required="">
                    <option>Select a month</option>
                    <option value="January">January</option>
                    <option value="Febuary">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
            </select></font></div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls">Number of liters of milk per cow: </label></font>
            <input class="cajas" type="text" name="litros" required="">
            </div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls">% fat: </label></font>
            <input class="cajas" type="text" name="porcengrasa" required="">
            </div>
            <div>
            <font face="Kristen ITC" size="4"><label class="controls"> kg of fat:</label></font>
            <input class="cajas" type="text" name="kgrasa" required="">
            </div>
            <div>
            <input class="btn_submit" type="submit" name="enviar" value="Save"> 
            </div>
            <div>
            <input class="btn_reset" type="reset" value="Clear">
            </div>
            </div>
        </form>
    </body>
</html>