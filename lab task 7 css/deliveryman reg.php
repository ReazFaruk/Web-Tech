<?php


$nameErr = $emailErr = $phoneErr = $vehicleErr = $dateErr =  $genderErr = $addressErr = "";
$name = $email = $gender = $phone = $date = $vehicle = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["vehicle"])) {
    $vehicleErr = "";
  } else {
    $vehicle = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php 
/*include("../Navbar/navbar.php")*/
 ?>
 
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>  



<h2>Deliveryman Registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for ="name">Name: <input type="text" name="name"></label>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <label for ="E-mail">E-mail: <input type="text" name="email"></label>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for ="Phone">Phone: <input type="text" name="phone"></label>
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  <label for ="Date of Birth">Date of Birth: <input type="date" name="date"></label>
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>
  <label for ="Address">Address: <textarea name="address" rows="2" cols="30"></textarea></label>
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  <label for ="Vehicle">Vehicle: <input type="text" name="Vehicle"></label>
  <span class="error"> <?php echo $vehicleErr;?></span>
  <br><br>
  <label for ="Gender">Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <?php 
  /*include("../File IO/changeProfilepic.php")*/
   ?>
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $date;
echo "<br>";
echo $address;
echo "<br>";
echo $vehicle;
echo "<br>";
echo $gender;
?>

</body>
</html>