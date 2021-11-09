<!DOCTYPE html>
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

          <?php
          SESSION_start();
          $id=$_SESSION["id"];
          $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
          $sql="SELECT * FROM hr where id ='$id' ";
          $res= $connect -> query($sql);
          $row = mysqli_fetch_assoc($res);
          $name=$row["First_Name"];
          echo $name;
          
          
          
          
          ?>

          </h2>
          <h4>HR</h4>
        </center>
        <ul>
         <a href="hrdash.php"> <li class="active">HOME</li></a>
  
         <a href="login.html"><li>LOGOUT</li></a>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h3>HR's Glaza</h3>
          </div>
        </div>
        <div class="sub">
        <div class="card">
          <a href="emplist_for_hr.php">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Employee Count:</span><br />
            <!-- <h1>300</h1> -->
   
            <h1 class="time">
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM employees_data; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"$cnt";
            
            
            ?>
            </h1>
           
            </div>
          </a>
          </div>
</div>
      <div class="card">
          <a href="#">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Active Now</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM employees_data where status='1'; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"$cnt";
            
            
            ?>
            </h1>
            </div>
          </a>
          </div>
      </div>
      </div>
      <div class="sub">
      <div class="card">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Pay Scale/1hr</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            $id=$_SESSION["id"];
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr where id='$id'; ";
            $res= $connect -> query($sql);
            $row = mysqli_fetch_assoc($res);
            $payscale=$row["Salary"];
            echo $payscale;
            
            
            ?>
            </h1>
            </div>
          </div>
          </div>
          <div class="card">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Last Login</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            
            $id=$_SESSION["id"];
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr where id='$id'; ";
            $res= $connect -> query($sql);
            $row = mysqli_fetch_assoc($res);
            $lastlogin=$row["Login"];
            echo $lastlogin;
            
            ?>
            </h1>
            </div>
          </div>
          </div>
          <div class="card">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Current Active Time</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            
            $id=$_SESSION["id"];
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr where id='$id'; ";
            $res= $connect -> query($sql);
            $row = mysqli_fetch_assoc($res);
            $time=$row["Hours_active"];
            echo $time;
            
            
            ?>
            </h1>
            </div>
         
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
</html>
