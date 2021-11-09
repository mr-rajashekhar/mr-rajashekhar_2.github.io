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
   $pay=($diff+$active)*$payscale;
   echo $pay;

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
   $pay=($diff+$active)*$payscale;
   echo $pay;

  }

}

?>