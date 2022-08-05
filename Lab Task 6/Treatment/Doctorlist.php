<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

.title{
 
 text-align: center;
 padding: 10px;
 color: white;
}
.des{
  padding: 3px;
  text-align: center;
  color: #fff;
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
</style>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online Doctor & Emergency Service</title>
   <link rel="stylesheet" href="../style.css">

   <script>
function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
     user = prompt("Please enter your name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}
</script>

</head>


<body>
   
<body onload="checkCookie()"></body>



   <div class="main">
      <div class="navbar">
          <div class="">
              <h2 class="logo">Our Services</h2>
          </div>

          <div class="menu">
              <ul>

                  <li><a href="../Profile/account.php">User Profile</a></li>
              </ul>
          </div>

          <div class="topnav-right">
          <div class="">
          <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
      ?>
          <h3><?php echo $fetch['name']; ?></h3>
          <button class="btnn"><a href="../Login/?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a></button>
          </div>
          </div>



      </div> 

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/ent_specialist_BD.jpg">
</div>
<div class="title">
 <h1> ENT</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/entdoctorDB/showAllStudents.php">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/kidney-medicine-doctor-bangladesh.jpg">
</div>
<div class="title">
 <h1>Kidney & Medicine</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/KidneyDB/showAllStudents.php">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/Neuromedicine_Doctor_Dhaka.jpg">
</div>
<div class="title">
 <h1>Neuromedicine</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/NeuromedicineDB/showAllStudents.php">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/Orthopedics_Doctor_Dhaka.jpg">
</div>
<div class="title">
 <h1>Orthopaedic Surgeon</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href=../Treatment/OrthopaedicDB/showAllStudents.php>Click Here</a></button>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
		include 'footer.php';
	 ?>
</body>
</html>