<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="salary.css">
    <style>
      
    </style>
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <script src="" async defer></script>
    <div class="heading">
      <h1>TRADINGLAZA</h1>
      <span>Lets trade together</span>
    </div>
    <center>
    <div class="box">
  <h2>The current salary of the employee is:</h2>
  <h3>
<?php

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
if($role=="hr"){
  $sql="SELECT * from hr where id=$id";
  $res= $connect -> query($sql);
  if($res){
    $row = mysqli_fetch_assoc($res);
  if($row["Status"]){
    $logintime=$row["Login"];
    $time=time();
    $str = strtotime($logintime);
	 $end = strtotime($time);
	 $diff = ($end-$str)/60;
   $active=$row["Hours_active"];
   $payscale=$row["Salary"];
   $pay=($diff+$active)*$payscale;
   echo $pay;

  }
  else{
    $logintime=$row["Login"];
    $time=$row["Logout"];
    $str = strtotime($logintime);
	 $end = strtotime($time);
	 $diff = ($end-$str)/60;
   $active=$row["Hours_active"];
   $payscale=$row["Salary"];
   $pay=($active)*$payscale;
   echo $pay;

  }
  }
  else{
    echo "no res";
  }
}
else{
  $sql="SELECT * from employees_data where id=$id";
  $res= $connect -> query($sql);
  $row = mysqli_fetch_assoc($res);
  if($row["Status"]){
    $logintime=$row["Login"];
    $time=time();
    $str = strtotime($logintime);
	 $end = strtotime($time);
	 $diff = ($end-$str)/60;
   $active=$row["Hours_active"];
   $payscale=$row["Salary"];
   $pay=($diff+$active)*$payscale;
   echo $pay;

  }
  else{
    $logintime=$row["Login"];
    $time=$row["Logout"];
    $str = strtotime($logintime);
	 $end = strtotime($time);
	 $diff = ($end-$str)/60;
   
   $active=$row["Hours_active"];
   $payscale=$row["Salary"];
   $pay=($active)*$payscale;
   echo $pay;
   

  }

}

?>
  Rupees</h3>
  </div>
  </center>
</body>
</html>