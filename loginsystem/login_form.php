<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         header('location:dashboard.php');
      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
      }
   } else {
      $error[] = '¡Correo o contraseña incorrectos!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar Sesión</title>

   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Iniciar Sesión</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Correo">
         <input type="password" name="password" required placeholder="Contraseña">
         <input type="submit" name="submit" value="Conectarse" class="form-btn">
         <p>¿No tienes una cuenta? <a href="register_form.php">Regístrate</a></p>
         <p>¿Quieres conocernos o trabajar con nosotros? <a href="./contact-form.php">Conocenos</a></p>
      </form>

   </div>

</body>

</html>