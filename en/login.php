<html>
<head>
<link rel="icon" href="vaca.png">
  <title>LOG IN</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="contain">
    <div class="form_top act"> 
     <h3 align="center"><img src="perfil.png" width="55%" height="40%">
     <form class="regist" action="validate.php" method="POST"> 
      <div><br>
      <label class="control1"for="name_user"><font face="Kristen ITC">Username:</font></label>
      <input class="boxes" type="text" name="usuario" placeholder="Enter your username" required="">
      </div>
      <div>
      <label class="control" for="name"><font face="Kristen ITC">Password:</font></label>
      <input class="boxes" type="password" name="password" placeholder="Enter your password" required="">
      </div>
      <input class="submit" type="submit" name="submit" value="Log in">
      </form>
      <a href="register.php"><button class="create" type="submit">Create an account</button></a>
  </div>
  </div>
</body>
</html>