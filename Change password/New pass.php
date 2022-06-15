<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = $passwerdErr = "";
$name = $pass = $passwerd = "";

if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check Password must be 8 Digits
    if (!preg_match("/^[0-9_a-zA-Z]{8,}$/",$pass))
    {
        $passErr = "Password Is Not Same";
    }
  }

  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Change your Password</h2>
<p><span class="error">* Password required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

Old Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  New Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  Conform Password: <input type="text" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Reset Password</button>

  <input type="submit" name="submit" value="Conform Passwrod">  
</form>

</body>
</html> 