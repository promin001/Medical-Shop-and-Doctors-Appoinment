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
    <title>Account</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>
    <div 
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
      ?>
      <h3></h3>
   </div>

    <a href="#" class="logo"> <span><?php echo $fetch['name']; ?></span></a>

    <nav class="navbar">
        <a href="account.php">home</a>
        <a href="View_Profile.php">View Profile</a>
        <a href="Edit_Profile.php">Edit Profile</a>
        <a href="Photo_Change.php">Photo Change</a>
        <a href="Change_Password.php">Change Password</a>
        <a href="../Treatment/Doctorlist.php">Back To Doctors</a>
        <a href="../Login/?logout">Logout</a>
    </nav>

    <div class="follow">
        <a href="https://www.facebook.com/ahateshamrabbi/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/shopordernow" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/shopordernow1/?hl=en" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/ahatesham-rabbi-4722b7136/" class="fab fa-linkedin"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> hi there... </span>
        <h3> i am <span> <?php echo $fetch['name']; ?> </span> </h3>
        <p class="info"> Welcome to my Profile </p>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>


</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer class="footer"> created by <span> Ahatesham Rabbi </span> | all rights reserved! </footer>


</body>
</html>