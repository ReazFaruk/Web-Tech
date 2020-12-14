<?php


$nameErr = $emailErr = $phoneErr = $shopnameErr = $dateErr =  $genderErr = $addressErr = "";
$name = $email = $gender = $phone = $date = $shopname = $address = "";

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

  if (empty($_POST["shopname"])) {
    $shopnameErr = "Shop name is required";
  } else {
    $shopname = test_input($_POST["address"]);
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



<h2>Seller Registration</h2>
<p><span class="error">* required field</span></p>
<form name="seller_reg" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phone: <input type="number" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Date of Birth: <input type="date" name="date">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>
  Address: <textarea name="address" rows="2" cols="30"></textarea>
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  Shop Name: <input type="text" name="shopname">
  <span class="error">* <?php echo $shopnameErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
   <input type="submit" name="submit" value="Submit">
  <?php 
  /*include("../File IO/changeProfilepic.php")*/
  ?>
  <br><br>
  
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
echo $shopname;
echo "<br>";
echo $gender;
?>

<script>
function validateForm() {
  var x = document.forms["seller_reg"]["name"].value;
  var x = document.forms["seller_reg"]["email"].value;
  var x = document.forms["seller_reg"]["phone"].value;
  var x = document.forms["seller_reg"]["date"].value;
  var x = document.forms["seller_reg"]["address"].value;
  var x = document.forms["seller_reg"]["shopname"].value;
  
  if (x == "") {
    alert(" required field ");
    return false;
  }
}
</script>
</body>
</html>
 