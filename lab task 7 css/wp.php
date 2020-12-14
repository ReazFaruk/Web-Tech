<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
  <style>
  </style>
</head>


<body>

    <?php

    $validation = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $email = test_input($_POST["email"]);
      $password = test_input($_POST["password"]);
      
      if ($email=="sadmanhossain1998@gmail.com" && $password == "123456") {

       $validation = "Welcome to your account";
      }
      else{
        $validation = "Wrong email/password";
      }
     
      
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

<h2>Login Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  <br><br>
  E-mail: <input type="text" name="email">

  Password: <input type="text" name="password">
  

  
  <?php echo $validation;?>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<div class="container signin">
    <p>Don't have a account? <a href="../Registration/Customer Reg.php">Sign Up</a></p>
  </div>



</body>
</html>