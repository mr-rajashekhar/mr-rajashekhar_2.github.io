<?php
session_start();
$id=$_SESSION["id"];
$connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
if($_SESSION["role"]=="hr"){
  $sql="SELECT * FROM hr where User_name ='$username' and Password='$password'";
  $res= $connect -> query($sql);
}
else{
  $sql="SELECT * from employees_data where id=$id";
 $res= $connect -> query($sql);
 $row = mysqli_fetch_assoc($res);
 $col= $result->fetch_assoc();
 $last = $col["Login"] ;
 if($col["status"]){
  $recent=time();
 }
 else{
  $recent=$col["Logout"] ;
 }
 $diff = ($end-$str)/60;
 $active =$col["Days_Attented"];
 $acive+=$diff;
 $sql = "UPDATE employees_data SET Hours_active = '$act_hours' WHERE id = $id";

}

?>