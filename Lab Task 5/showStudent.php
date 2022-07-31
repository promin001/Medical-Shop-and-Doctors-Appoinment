<?php  
require_once 'controller/studentInfo.php';

$student = fetchStudent($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
<title>Show Doctors</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

      <style>
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
<body>
<div class="main">
         <div class="navbar">
             <div class="">
                 <h2 class="logo">EYE DOCTORS</h2>
             </div>
   
             <div class="menu">
			 <ul>
                    <li><a href="../entdoctorDB/addStudent.php">Add Doctor</a></li>
                    <li><a href="../entdoctorDB/showAllStudents.php">Show All Doctors</a></li>
                    
                </ul>

             <div class="topnav-right">
    <form method="post" action="controller/findUser.php">
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>

            </div>
             </div>
			 <br><br><br><br>
			 <h1 id="demo"></h1>


<div class="content" style="width:1000px;">              
	   <div class="table-responsive"> 
<table style="width:100%">
	<tr>
		<th>Name</th>
		<th>Education</th>
		<th>Appointment Day</th>
		<th>Time</th>
		<th>Image</th>
	</tr>
	<ul>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
		<td><?php echo $student['Surname'] ?></td>
		<td><?php echo $student['Username'] ?></td>
		<td><?php echo $student['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td><br>
	</tr>
	</ul>

</table>
<?php 
		        include '../footer.php';
	     ?>


</body>
</html>