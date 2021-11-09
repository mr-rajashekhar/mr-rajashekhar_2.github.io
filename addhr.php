<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="admindash.css" />
    <link rel="stylesheet" href="adduser.css" />
    <!-- <link rel="stylesheet" href="login.css" /> -->
    <link rel="stylesheet" href="addhr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
   <title>Add_New_Employe</title>
   <style>
     .sidebar{
       position: fixed;
     }
     .main{
       margin-left:100px;
     }
   </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <ul>
          <a href="admindash.php" > 
          <li >
            <ion-icon name="home" size="large"></ion-icon>
          </li></a>
          <a href="adduser.html" >  <li class="active"><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
         <a href="view .html"> <li><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li></a>
          <li><ion-icon name="log-out-sharp" size="large"></ion-icon></li>
        </ul>
      </div>
      <div class="main">
        <div class="h-title">
          <h2 style="margin-right: 200px;">Add a New HR</h2>
        </div>
        <div class="head">
          <div class="hr">
<<<<<<< Updated upstream
            <form action="addhr.php" class="form" method="post" enctype="multipart/form-data">
=======
            <form action="addhr.php" method="post" class="form">
>>>>>>> Stashed changes
              <h2>Fill details</h2>
              <!-- <div class="imgcontainer">
                <img src="hr.png" alt="Avatar" class="avatar" />
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Firstname" />
                <label for="" class="label">Firstname</label>
              </div>
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Lastname"/>
                <label for="" class="label">Lastname</label>
              </div>
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Username"/>
                <label for="" class="label">Username</label>
              </div>
              <!-- <div class="container">
                <input type="number" class="input" placeholder="a" name="Phone-Number"/>
                <label for="" class="label">Phone Number</label>
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Age"/>
                <label for="" class="label">Age</label>
              </div>
              <!-- <div class="container">
                <input type="text" class="input" placeholder="a" name="state"/>
                <label for="" class="label">State</label>
              </div> -->
              <!-- <div class="container">
                <label for="gender" class="label">Gender</label>
                
                <label for="Male">Male</label><br>
                  <input type="radio" id="html" name="gender" value="Male">
                <label for="Female">Female</label><br>
                <input type="radio" id="html" name="gender" value="Female">
                
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Payscale"/>
                <label for="" class="label">Payscale/1hr</label>
              </div>
              
              <div class="container">
                <input type="password" class="input" placeholder="a" name="password">
                <label for="" class="label">Password</label>
              </div>
              <div class="container">
              <p >Gender : Male <input type="radio" name="new_gender" value="male" required id=""> Female <input type="radio" name="new_gender" value="female" id=""></p>
              </div>
<!--         
              <div class="container">
                <input type="text" class="input" placeholder="a" name="password">
                <label for="" class="label">Confirm Password</label>
              </div> -->
              <h4>Upload Profile Photo</h4>
              <input type="file" class="input1" id="myFile" name="filename">
<<<<<<< Updated upstream
              <input type="submit" class="submitBtn" value="Add" name="submit" />
=======
              <input type="submit" class="submitBtn" name="submit" value="Add" />
>>>>>>> Stashed changes
              
            </form>
          </div>
       
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
<<<<<<< Updated upstream
<?php
$conn = new mysqli("localhost","root","","company");
//$conn = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
if($conn-> connect_error)
die("Connection failed" . $conn->connect_error);

$sql = "CREATE TABLE hr(
  id int(255) NOT NULL AUTO_INCREMENT,
    First_Name varchar(120) null default'NOT NULL',
  Last_Name varchar(120) null default'NOT NULL',
  User_name varchar(120) null default'NOT NULL',
  Password varchar(20),
  Age int(2),
  Gender char(6),
  
  Hours_active DECIMAL(5,2) NOT NULL,
  Salary numeric(6) NOT NULL ,
  Image varchar(120),
  Status BOOLEAN NOT NULL DEFAULT 0,
  Payment numeric(6) NOT NULL,
  Login TIME,
  Logout TIME,
  Recent_activity TIME,
  primary key(id)
    )";
    if($conn->query($sql)===true)
    echo "Table created successfully" . "<br>";
     else echo "Error creating table: " .$conn->error . "<br>";
@$add_new = $_POST["submit"];



// ADDING A NEW EMPLOYEE
if($add_new){
	echo "hi";
	
	$firstname = $_POST["Firstname"];
	$lastname = $_POST["Lastname"];
	$username = $_POST["Username"];
	$pass = $_POST["password"];
	$age = $_POST["Age"];
	$gender =  $_POST["new_gender"];


	$sal = $_POST["Payscale"];
   
	$image = $_FILES["filename"];
   
	
	$filename = $image['name'];
	$temp_loc = $image['tmp_name'];
	$dum = explode('.',$filename);
	
	$extension = strtolower($dum[1]);
	$valid_extension = array('jpg' ,'png', 'jpeg');

	if(in_array($extension, $valid_extension))
	{
		$des_loc = 'hr_images/'.$filename;
		move_uploaded_file($temp_loc , $des_loc);
	$sql = "INSERT into hr(First_Name,Last_Name,User_name,Password,Age,Gender,Salary,Image) 
	VALUES('$firstname','$lastname','$username','$pass','$age','$gender','$sal','$filename')";
	
	if ($conn->query($sql) === TRUE)
    echo "New Employee added to our company :) ";
    else echo "Error: ". $conn->error . "<br>"; 
		
		
	}
	else echo "Image can't be uploaded into the database" . "<br>";
	
}
=======



>>>>>>> Stashed changes
