<?php
session_start();
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
$longitude=$params["longitude"];
$latitude=$params["latitude"];
$id=$_SESSION["id"];
$date=date("Y-m-d");
echo "$longitude ";
echo " $id";
echo " $latitude ";
echo $date;

  $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
  $sql="SELECT * FROM activity where id='$id' and date='$date';";
  $res= $connect -> query($sql);
  if($res){
    $sql = "UPDATE activity
    SET latitude= '$latitude' ,longitude = '$longitude'
    WHERE id = '$id' and date='$date' " ;
    $res= $connect -> query($sql);
  }
  else{
    $sql = "INSERT into activity (id,latitude,longitude,date) VALUES ('$id','$latitude','$longitude','$date')";
    $res= $connect -> query($sql);
  }












?>