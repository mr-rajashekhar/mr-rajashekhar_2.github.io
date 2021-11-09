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
          <div class="search">
           <form action="viewhr.php" method="post"> 
           <select name="dropdn"  id="dropdn">
    <option value="name">name</option>
    <option value="id">id</option>
    
  </select>
             <input type="search" name="search_by" placeholder="search by" />
             <input
            type="submit"
            name="hr_search"
            value="search"
          />
          </form>
          </div>
        </div>
       <!-- for tiles -->
       <div class="tiles">
       <?php
        if(!isset($_SESSION["admin"])|| !$_SESSION["admin"]){
          header('Location: index.html');
        }
       $temp='<a href="onclick_admin.php?id=xy&&role=hr"><div class="card-container">
       <img class="round" src="./hr_images/%img%" height=150px width=150px alt="user" />
       <h3>vicky</h3>
       <p>id: hai</p>
      </div></a>';
      $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
      if(isset($_POST["hr_search"])){
        if($_POST["dropdn"]=="name"){

          $name=$_POST["search_by"];
          $sql = "SELECT * from hr where First_Name like '%$name%'";

        }
        else{

          $id=$_POST["search_by"];
          if($id){$sql="SELECT *
            FROM hr where id='$id'; ";}
          else{
            $sql="SELECT *
        FROM hr ; ";
          }

        }
        
      $res= $connect -> query($sql);
      if($res->num_rows !=0){
        
        while($data = $res -> fetch_assoc()){
          $name=$data["First_Name"];
          $id =$data["id"];
          $img=$data["Image"];
            $temp1= str_replace("vicky",$name,$temp);
            $temp1= str_replace("hai",$id,$temp1);
            $temp1= str_replace("%img%",$img,$temp1);
            echo str_replace("xy",$id,$temp1);

        }

      }
      }
      else{
        $sql="SELECT *
      FROM hr; ";
      $res= $connect -> query($sql);
      if($res->num_rows !=0){
        
        while($data = $res -> fetch_assoc()){
          $name=$data["First_Name"];
          $id =$data["id"];
          $img=$data["Image"];
            $temp1= str_replace("vicky",$name,$temp);
            $temp1= str_replace("hai",$id,$temp1);
            $temp1= str_replace("%img%",$img,$temp1);
            echo str_replace("xy",$id,$temp1);

        }

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
