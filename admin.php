<?php
if(isset($_POST["submit"])){
  $user=$_POST["uname"];
  $pass=$_POST["psw"];
  if($user=="admin"&& $pass="admin"){
    session_start();
    $_SESSION["admin"]=true;
    header('Location: admindash.php');
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="admin.css" />
    <title>Admin.io</title>
  </head>
  <body>
    <h1>Welcome Back Admin!!</h1>
    <h4>Login To Continue...</h4>

    <div class="hr">
      <form action="./admin.php" method="post">
        <h1>ADMIN Login</h1>
        <div class="imgcontainer">
          <img src="admin.png" alt="Avatar" class="avatar" />
        </div>
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="uname"
            required
       
            width="50px"
          />

          <label for="psw"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />

          <button type="submit" name="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember" />
            Remember me
          </label>
        </div>

        <!-- <div class="container" style="background-color: #f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div> -->
      </form>
    </div>
    <div class="contact">
      <h3>In case of any issues, click <a href="team.html">Here</a></h3>
    </div>
  </body>
</html>
