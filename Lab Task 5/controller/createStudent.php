<!DOCTYPE html>
<html>
<head>
<head>
      <title>Add Doctors</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

      <style>
		          table, thead, td, tbody {
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
        }
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}


.navbar{
    width: 1500px;
    height: 700px;
    margin: auto;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}
ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
      </style>
   </head>
</head>
<body>
<div class="main">
         <div class="navbar">
             <div class="">
                 <h2 class="logo">EYE DOCTORS</h2>
             </div>
   
             <div class="menu">
			 <ul>
                    <li><a href="../addStudent.php">Add Doctor</a></li>
                    <li><a href="../showAllStudents.php">Show All Doctors</a></li>
                    
                </ul>

             <div class="topnav-right">
    <form method="post" action="controller/findUser.php">
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>

            </div>
             </div>
			 <br><br><br><br>
			 <?php  
require_once '../model/model.php';


if (isset($_POST['createStudent'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
         </div> 
 

		 <script>
              setTimeout(myFunction, 3000);

              function myFunction() {
              document.getElementById("demo").innerHTML = "Doctor's List !!";
            }
          </script>
		          <?php 
		        include '../footer.php';
	     ?>

</body>
</html>

