<?php

include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Administrador</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hola, <span>Administrador</span></h3>
      <h1>Bienvenido <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Página de administración</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Registro</a>
      <a href="logout.php" class="btn">Salir</a>
   </div>

</div>

</body>
</html>