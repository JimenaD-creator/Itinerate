<html>
<head>
<link rel="icon" href="vaca.png">
  <title>INICIAR SESIÓN</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    <div class="form_top action"> 
     <h3 align="center"><img src="perfil.png" width="55%" height="40%">
     <form class="register" action="validar.php" method="POST"> 
      <div><br>
      <label class="controls1"for="name_user"><font face="Kristen ITC">Usuario:</font></label>
      <input class="cajas" type="text" name="usuario" placeholder="Ingresa tu usuario" required="">
      </div>
      <div>
      <label class="controls" for="name"><font face="Kristen ITC">Contraseña:</font></label>
      <input class="cajas" type="password" name="password" placeholder="Ingresa tu contraseña" required="">
      </div>
      <input class="btn_submit" type="submit" name="submit" value="Iniciar sesión">
      </form>
      <a href="registro.php"><button class="btn_create" type="submit">Crear una cuenta</button></a>
  </div>
  </div>
</body>
</html>