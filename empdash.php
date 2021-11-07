<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Employee Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
    <link rel="stylesheet" href="empdash.css"/>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <a class="link" href="index.html" target="_blank">
          <div class="main_1">
            <div class="icon">
              <img src="logo.png" height="40px" width="40px" />
            </div>
            <div class="info_1">
              <h2>Tradinglaza</h2>
            </div>
          </div>
        </a>
        <div class="imgcont">
          <img src="male.png" width="100%" height="100%" />
        </div>
        <center>
          <h2>Empl Name</h2>
          <h4>Job Description</h4>
        </center>
        <ul>
          <li class="active">HOME</li>
          <li>LOGOUT</li>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h2 class="name">Employee's Glaza</h2>
          </div>
        </div>
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
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr; ";
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
          <a href="viewhr.html">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Last Login</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr; ";
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
          <a href="viewhr.html">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>Current Active Time</span><br />
            <!-- <h1>300</h1> -->
            <h1 class="time">
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr; ";
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
