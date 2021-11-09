<?php
session_start();
$id=$_SESSION["id"];
$conn = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
    $sql = "UPDATE    SET Logout =now() WHERE id = $id";
    $conn->query($sql);
    $sql1 = "SELECT * from hr  where id=$id";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    $curr = $row['Logout'];
    $past = $row['Login'];
    
   $start = strtotime($past);
   $end = strtotime($curr);
   $diff = ($end-$start)/60 ;
   
   
   $before = $row['Hours_active'];
   $new = $before+$diff;
    
    $sql = "UPDATE  hr  SET  Hours_active = '$new' WHERE id $id";
    $conn->query($sql);
    $sql = "UPDATE hr SET Status=0 WHERE id = $id";
    $res= $conn -> query($sql);
    header('Location: login.html');
    



?>