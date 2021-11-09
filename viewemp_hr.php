<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HR Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="hrdash.css" />
    <link rel="stylesheet" href="viewemp.css"/>
    <link rel="stylesheet" hrfe="viewemp_hr.css">
    <!--<link rel="stylesheet" href="viewhr.css" /> -->
 
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
      .card-container10 {
  background-color: rgb(133, 4, 255);
  border-radius: 5px;
  box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.75);
  color: #ffffff;
  padding-top: 30px;
  position: relative;
  width: 300px;
  max-width: 100%;
  text-align: center;
  margin-left: 40px;
  height: 260px;
  padding-bottom: 20px;
}
.card-container10 .round {
  border: 1px solid #03bfcb;
  border-radius: 50%;
  padding: 7px;
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
            <h3>HR's Glaza/Employee List</h3>
          </div>
        </div>
        <div class="tiles">
       <?php
       $temp='<a href="onclick_admin.php?id=xy&&role=employee"><div class="card-container10">
       <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
       <h3>vicky</h3>
       <p>id: hai</p>
      </div></a>';
      $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
      if(isset($_POST["emp_search"])){
        if($_POST["dropdn"]=="name"){

          $name=$_POST["search_by"];
          $sql = "SELECT * from employees_data where First_Name like '%$name%'";

        }
        else{

          $id=$_POST["search_by"];
          if($id){$sql="SELECT *
            FROM employees_data where id='$id'; ";}
          else{
            $sql="SELECT *
        FROM employees_data ; ";
          }

        }
      $res= $connect -> query($sql);
      if($res->num_rows !=0){
        
        while($data = $res -> fetch_assoc()){
          $name=$data["First_Name"];
          $id =$data["id"];
            $temp1= str_replace("vicky",$name,$temp);
            $temp1= str_replace("hai",$id,$temp1);
            echo str_replace("xy",$id,$temp1);

        }

      }
      }
      else{
        $sql="SELECT *
      FROM employees_data; ";
      $res= $connect -> query($sql);
      if($res->num_rows !=0){
        
        while($data = $res -> fetch_assoc()){
          $name=$data["First_Name"];
          $id =$data["id"];
            $temp1= str_replace("vicky",$name,$temp);
            $temp1= str_replace("hai",$id,$temp1);
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
