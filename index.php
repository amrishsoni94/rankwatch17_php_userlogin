<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $address = $password = $mobile = $age = $country = $state = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $age = test_input($_POST["age"]);
  $country = test_input($_POST["country"]);
  $state = test_input($_POST["state"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form</h2>
<form method="post" action="?/" echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
  Full Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  Mobile number: <input type="text" name="Full name">
  <br><br>
  Age: <input type="text" name="age">
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  Country List: <input type="dropdown" name="Country">
  <br><br>
  State List: <input type="AJAX" name="state">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php

echo "$_SERVER";
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
echo "<br>";
echo $mobile;
echo "<br>";
echo $age;
echo "<br>";
echo $country;
echo "<br>";
echo $state;
echo "<br>";


?>


</body>
</html>