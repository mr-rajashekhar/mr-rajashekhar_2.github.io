<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="admindash.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
      .main {
  margin-left: 100px;
}
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <ul>
          <li class="active">
            <ion-icon name="home" size="large"></ion-icon>
          </li>
          <a href="adduser.html">  <li><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
          <a href="view.html"><li ><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li></a>
          <a href="admin.php"><li><ion-icon name="log-out-sharp" size="large"></ion-icon></li></a>
        </ul>
      </div>
      <div class="main">
        <div class="head">
          <div class="h-title">
            <h2>Dashboard</h2>
            <span>Admin Page</span>
          </div>
          <!-- <div class="search">
            <input type="search" placeholder="Search" />
          </div> -->
        </div>
        <div class="board">
          <a href="viewhr.php">
          <div class="card">
            <div class="info">
              <div class="card-icon">
                <ion-icon name="people-circle-outline" size="large"></ion-icon>
              </div>
              <span>HR Count</span><br />
            <!-- <h1>300</h1> -->
            <?php
            session_start();
            if(!isset($_SESSION["admin"])|| !$_SESSION["admin"]){
              header('Location: index.html');
            }
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM hr; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"<h1>$cnt</h1>";
            
            
            ?>
            </div>
          </a>
          </div>
          <a href="viewemp.php">
        <div class="card">
          <div class="info">
            <div class="card-icon">
              <ion-icon name="people-circle-outline" size="large"></ion-icon>
            </div>
            <span>Employee Count</span><br />
            <!-- <h1>500</h1> -->
            <?php
            
            $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
            $sql="SELECT *
            FROM employees_data; ";
            $res= $connect -> query($sql);
            $cnt=$res->num_rows;
            echo"<h1>$cnt</h1>";
            ?>
            <!-- <h5>Part Time:500</h5>
            <h5>Full Time:500</h5>
            <h5>Total:1000</h5> -->
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
