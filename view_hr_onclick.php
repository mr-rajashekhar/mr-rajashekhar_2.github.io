
<?php
$temp='<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HR Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="hrdash.css" />
 
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
           .sidebar {
  width: 200px;
  height: 800px;
  background: #fff;
  position: fixed;
  margin-right: 200px;
}
.main{
  margin-left:200px;
}
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <a class="link" href="index.html" target="_blank">
          <div class="main_1">
            <div class="icon">
              <img src="logo.png" height="30px" width="30px" />
            </div>
            <div class="info_1">
              <h3>Tradinglaza</h3>
            </div>
          </div>
        </a>
        <div class="imgcont">
          <img src="hr1.png" width="100%" height="100%" />
        </div>
        <center>
          <h2>

         
          %hrname%

          </h2>
          <h4>HR</h4>
        </center>
        <ul>
         <a href="hrdash.php"> <li class="active">HOME</li></a>
  
          <li>LOGOUT</li>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h3>HRs Glaza/Employee Details</h3>
          </div>
        </div>
       <center>
        <div class="card-container">
    <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
    <h3>vicky</h3>
    <h6>hai
      
    </h6>
    <div class="buttons">
        <a href="activity.php?id=%id%"><button class="primary">
            activity
        </button></a>
        <button class="primary">
            salary
        </button>
    </div>
    
</div>
</center>
      <div class="sub">
      <div class="card">
          <a href="viewhr.html">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Pay Scale/1hr</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            %pay%
            </h1>
            </div>
          </a>
          </div>
          </div>
          <div class="card">
          <a href="viewhr.html">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Last Login</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            %lst%
            </h1>
            </div>
          </a>
          </div>
          </div>
          <div class="card">
          <a href="viewhr.html">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Current Active Time</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            %active%
            </h1>
            </div>
          </a>
          </div>
          </div>
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
</html>';
 SESSION_start();
 $id=$_SESSION["id"];
 $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
$sql="SELECT * FROM hr where id ='$id' ";
$res= $connect -> query($sql);
$row = mysqli_fetch_assoc($res);
$name=$row["First_Name"];
$temp= str_replace("%hrname%",$name,$temp);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
  $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$url_components = parse_url($url);
 
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$id=$params["id"];
$role=$params["role"];
$temp= str_replace("%id%",$id,$temp);
$sql="SELECT *
FROM employees_data where id='$id'; ";  
$res= $connect -> query($sql);  
$data = $res -> fetch_assoc();
$name=$data["First_Name"];
$temp1= str_replace("vicky",$name,$temp);
 $active=$data["Hours_active"];
 $payscale=$data["Salary"];
 $lastlogin=$data["Login"];
 $temp1= str_replace("%active%",$active,$temp1);
 $temp1= str_replace("%lst%",$lastlogin,$temp1);
 $temp1= str_replace("%pay%",$payscale,$temp1);
echo $temp1;
          
          
          
          
 ?>
