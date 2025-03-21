<html>
<head>
<link rel="icon" href="vaca.png">
  <title>REGISTRO</title>
  <link rel="stylesheet" href="registrar.css">
</head>
<body>
  <div class="container">
    <div class="form_top action"> 
     <h3 align="center"><font face="Broadway" size="6" color="white">REGISTRO</font></h3>
     <form class="register" action="regusuarios.php" method="POST"> 
      <div><br>
      <label class="controls1"for="name_user" align="left"><font face="Kristen ITC">Usuario:</font></label>
      <input class="cajas" type="text" name="usuario" placeholder="Ingresa un usuario">
      </div>
      <div>
      <label class="controls" for="name"><font face="Kristen ITC">Contraseña:</font></label>
      <input class="cajas" type="password" name="password" placeholder="Ingresa una contraseña">
      </div>
      <div>
      <button class="btn_register" type="submit" name="registro">Registrarse</button>
      </div>
      <div>
      <input type="reset" class="btn_reset" value="Limpiar">
      </div>
     </form>
  </div>