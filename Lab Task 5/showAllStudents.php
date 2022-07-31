<?php  
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();
?>


<!DOCTYPE html>  
 <html>  

   <head>
      <title>Show All Doctors</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

      <style>
          table, thead, td, tbody {
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
        }


      body {
              background-color: coral;
          }
          *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 115vh;
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

.menu{
    width: 00px;
    float: left;
    height: 0px;
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
.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
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

             <?php 
                 include "nav.php";
             ?>

             <div class="topnav-right">
    <form method="post" action="controller/findUser.php">
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search"/>
    </form>

            </div>
             </div>
   
         </div> 

         <h1 id="demo"></h1>


		 <div class="content" style="width:1000px;">              
                <div class="table-responsive"> 
<table style="width:100%" >
	<thead>
		<tr><br><br><br>
			<th>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
			<th>Education &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
			<th>Appointment Day &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
			<th>Time &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </th> 
			<th>Image</th>
			<th>Action</th>
           
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
				<td><?php echo $student['Surname'] ?></td>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['Name'] ?>"></td>
				<td><a href="editStudent.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>&nbsp <a href="store.php?id=<?php echo $student['ID'] ?>">Select</a></td>
            </tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
                 </div>
                     <button class="btnn"><a href="../Doctorlist.php">Back</a></button>
                   </div>
<br><br><br><br><br><br><br><br>
        <?php 
		        include '../footer.php';
	     ?>

      </body>  
 </html>  