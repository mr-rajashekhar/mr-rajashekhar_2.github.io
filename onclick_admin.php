
<?php

$tmp='<button class="primary">activity</button>';
$temp='<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="onclick_hr.css" />
    <link rel="stylesheet" href="login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
    .hr{
      margin-left:200px;}
      button {
        background-color: purple;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
       width: 90px;
      }
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <ul>
        <a href="admindash.php"> 
          <li >
            <ion-icon name="home" size="large"></ion-icon>
          </li></a>
          <a href="adduser.html">  <li><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
          <li class="active"><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li>
          <li><ion-icon name="log-out-sharp" size="large"></ion-icon></li>
        </ul>
      </div>
      <!-- <div class="sidebar1">
        <ul>
          <li class="active">
            <ion-icon name="home" size="large"></ion-icon>
          </li>
          <a href="adduser.html">  <li><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
          <li><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li>
          <li><ion-icon name="log-out-sharp" size="large"></ion-icon></li>
        </ul>
      </div> -->
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h2>Dashboard</h2>
            <span>Admin Page</span>
          </div>
        </div>
        <div class="sub">
 <center>
      
        <div class="card-container">
      <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
      <h3>vicky</h3>
      <h4>hai</h4>
      <div class="buttons">
          <a href="activity.php?id=%id%"><button class="primary">activity</button></a>
          <button class="primary">
             salary
          </button>
      </div>
      <!-- <center>
        <div class="x"> -->
      
        <!-- </div>
      </center> -->
  </div>
 
</center>
</div>
        <div class="sub">
        <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Pay Scale/1hr</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
         %payscale%
            </h1>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Last Login</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            %lastlogin%
            </h1>
            </div>
          </div>
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Current Active Time</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            %activetime%
            </h1>
            </div>
          </div>
          
          </div>
          <center>  
          <div class="hr">
         
        <form action="anclick_admin.php/id=%id%&role=%role%" method="post" class="form" style="height:300px;"> <center><h3>Change Password</h3></center>
          <div class="container" style="height:40px;">
            <input type="text" name="pwd" class="input" placeholder="a" />
            <label for="" class="label">New Password</label>
          </div>

          <div class="container" style="height:40px;">
            <input
              type="password"
              name="pwd_confirm"
              class="input"
              placeholder="a"
            />
            <label for="" class="label">Confirm Password</label>
          </div>
          <input
            type="submit"
            name="emp_signin"
            class="changeBtn"
            value="change"
          />
        </form>
       
    </div>
    </center>
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
$connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
if(isset($_POST["changeBtn"])){
 
$new_password=$_POST["pwd"];
if($params["role"]=="hr"){
  $sql = "UPDATE hr
	SET Password = '$new_password'
	WHERE id = '$id'" ;
}
else{
  $sql = "UPDATE employees_data
	SET Password = '$new_password'
	WHERE id = '$id'" ;
}

$res= $connect -> query($sql); 








}
     
if($role=="hr")
{
  $sql="SELECT *
  FROM hr where id='$id'; "; 
  $res= $connect -> query($sql);  
  $data = $res -> fetch_assoc();
  $name=$data["First_Name"];
  $temp1= str_replace("vicky",$name,$temp);
  $active=$data["Hours_active"];
  $payscale=$data["Salary"];
  $lastlogin=$data["Login"];
  $temp1= str_replace("%activetime%",$active,$temp1);
  $temp1= str_replace("%lastlogin%",$lastlogin,$temp1);
  $temp1= str_replace("%payscale%",$payscale,$temp1);
  $temp1=str_replace($tmp,"",$temp1);
  echo str_replace("hai","hr",$temp1);


}
else{
  $sql="SELECT *
FROM employees_data where id='$id'; ";  
$res= $connect -> query($sql);  
$data = $res -> fetch_assoc();
$name=$data["First_Name"];
$temp1= str_replace("vicky",$name,$temp);
 $active=$data["Hours_active"];
 $payscale=$data["Salary"];
 $lastlogin=$data["Login"];
 $temp1= str_replace("%activetime%",$active,$temp1);
 $temp1= str_replace("%id%",$id,$temp1);
 $temp1= str_replace("%role%",$params["role"],$temp1);
 $temp1= str_replace("%lastlogin%",$lastlogin,$temp1);
 $temp1= str_replace("%payscale%",$payscale,$temp1);
 echo str_replace("hai","employee",$temp1);
// echo $lastlogin;

}


 
     
     
     
     
     
     
     
     
     
     
     
     
     
     ?>    
