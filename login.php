<?php

$login = file_get_contents("login_w.html");
// connect to database
$connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
// hr signin-------------
if(isset($_POST["hr_signin"])){
  $password=$_POST["hr_pwd"];
  $username=$_POST["hr_uname"];
  $sql="SELECT * FROM hr where User_name ='$username' and Password='$password'";
  $res= $connect -> query($sql);
  if($res->num_rows !=0) {
    session_start();
    $row = mysqli_fetch_assoc($res);
    $_SESSION['loggedin']=true;
    $_SESSION['id']=$row["id"];
    $_SESSION["hr"]=true;
    header('Location: hrdash.php');
    exit();
    
  
  }
  else{
    echo "'$login'";}

}

// employee signin ___________________
 if(isset($_POST["emp_signin"])){
  $password=$_POST["emp_pwd"];
  $username=$_POST["emp_uname"];
  $sql="SELECT * FROM employees_data where User_name ='$username' and Password='$password'";
  $res= $connect -> query($sql);
  
  if($res->num_rows !=0) {
    session_start();
    $row = mysqli_fetch_assoc($res);
    $_SESSION['loggedin']=true;
    $_SESSION['id']=$row["id"];
    $_SESSION["emp"]=true;
    header('Location: empdash.php');
    exit();
    
  
  }
  else{
    echo "'$login'";}

   

}








?>