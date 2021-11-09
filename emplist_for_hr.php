<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="hrdash.css">
    <link rel="stylesheet" href="emplist_for_hr.css">
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
          <img class="round"src="hr1.png" width="100%" height="100%" /> 
          </div>
        <center>
          <h2>

          <?php
          SESSION_start();
          $temp3='';
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
          <div class="sub">
       <?php
       $temp='<a href="view_hr_onclick.php?id=xy&&role=employee"><div class="card-container1">
       <img class="round" src="./employee_images/%img%" height=150px width=150px alt="user" />
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
      FROM employees_data; ";
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

</div>
    <script src="" async defer></script>
  </body>
</html>