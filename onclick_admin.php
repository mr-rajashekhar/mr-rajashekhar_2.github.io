<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="onclick_hr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
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
    <h3>Ricky Park</h3>
    <h6>New York</h6>
    <p>User interface designer and <br /> front-end developer</p>
    <div class="buttons">
        <button class="primary">
            Image
        </button>
        <button class="primary">
            Location
        </button>
    </div>
    <!-- <center>
      <div class="x"> -->
    <button class="primary ">
            Calculate Salary
        </button>
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
       
          </div>
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

          </div>

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
