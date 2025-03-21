<html>
<head>
<link rel="icon" href="vaca.png">
  <title>REGISTER</title>
  <link rel="stylesheet" href="signin.css">
</head>
<body>
  <div class="container">
    <div class="form_top action"> 
     <h3 align="center"><font face="Broadway" size="6" color="white">REGISTER</font></h3>
     <form class="register" action="registerusers.php" method="POST"> 
      <div><br>
      <label class="controls1"for="name_user" align="left"><font face="Kristen ITC">Username:</font></label>
      <input class="cajas" type="text" name="usuario" placeholder="Enter an username">
      </div>
      <div>
      <label class="controls" for="name"><font face="Kristen ITC">Password:</font></label>
      <input class="cajas" type="password" name="password" placeholder="Enter a password">
      </div>
      <div>
      <button class="btn_register" type="submit" name="registro">Sign in</button>
      </div>
      <div>
      <input type="reset" class="btn_reset" value="Clear">
      </div>
     </form>
  </div>