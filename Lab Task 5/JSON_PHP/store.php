<?php 
require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['id']);
 ?>

<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Name</label>";  
      }
      else if(empty($_POST["Doctorname"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Address</label>";  
      }  
      else if(empty($_POST["dateandtime"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Number</label>";  
      }  
      
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'Doctor name'          =>     $_POST["Doctorname"],  
                     'Date and time'     =>     $_POST["dateandtime"],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Appointment Successfully </p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Take Appointment</title>
           <link rel="stylesheet" href="style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Appointment Now</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  

                     <label for="name">Doctor Name:</label><br>
                     <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
                     <label>Your Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Address</label>
                     <input type="text" name = "Doctorname" class="form-control" /><br />
                     <label>Number</label>
                     <input type="text" name = "dateandtime" class="form-control" /><br />

                     
                     <input type="submit" name="submit" value="Conform Appointment" class="btn btn-info" /><br />  
                     <button class="btnn"><a href="/Project/Doctorlist.php">Back</a></button>

                     <table>
                     </table>                    
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />
      </body>  
 </html>  