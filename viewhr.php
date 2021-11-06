<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="viewhr.css" />
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
          <li class="active">
            <ion-icon name="home" size="large"></ion-icon>
          </li>
          <a href="adduser.html">  <li><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
          <li><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li>
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
          <div class="search">
            <input type="search" placeholder="Search" />
          </div>
        </div>
       <!-- for tiles -->
       <div class="tiles">
       <?php
       $temp='<div class="card-container">
       <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
       <h3>vicky</h3>
       <p>id: hai</p>
      </div>';
      $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
      $sql="SELECT *
      FROM hr; ";
      $res= $connect -> query($sql);
      if($res->num_rows !=0){
        
        while($data = $res -> fetch_assoc()){
          $name=$data["First_Name"];
          $id =$data["id"];
            $temp1= str_replace("vicky",$name,$temp);
            echo str_replace("hai",$id,$temp1);

        }

      }
     

    
    
    
    ?>
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
