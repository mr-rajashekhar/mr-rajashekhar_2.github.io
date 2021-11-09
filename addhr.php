<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="admindash.css" />
    <link rel="stylesheet" href="adduser.css" />
    <!-- <link rel="stylesheet" href="login.css" /> -->
    <link rel="stylesheet" href="addhr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
   <title>Add_New_Employe</title>
   <style>
     .sidebar{
       position: fixed;
     }
     .main{
       margin-left:100px;
     }
   </style>
  </head>
  <body>
    <div class="wrap">
      <div class="sidebar">
        <ul>
          <a href="admindash.php" > 
          <li >
            <ion-icon name="home" size="large"></ion-icon>
          </li></a>
          <a href="adduser.html" >  <li class="active"><ion-icon name="person-add-sharp" size="large"></ion-icon></li></a>
         <a href="view .html"> <li><ion-icon name="eye-sharp" size="large">VIEW</ion-icon></li></a>
          <li><ion-icon name="log-out-sharp" size="large"></ion-icon></li>
        </ul>
      </div>
      <div class="main">
        <div class="h-title">
          <h2 style="margin-right: 200px;">Add a New HR</h2>
        </div>
        <div class="head">
          <div class="hr">
            <form action="" class="form">
              <h2>Fill details</h2>
              <!-- <div class="imgcontainer">
                <img src="hr.png" alt="Avatar" class="avatar" />
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Firstname" />
                <label for="" class="label">Firstname</label>
              </div>
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Lastname"/>
                <label for="" class="label">Lastname</label>
              </div>
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Username"/>
                <label for="" class="label">Username</label>
              </div>
              <!-- <div class="container">
                <input type="number" class="input" placeholder="a" name="Phone-Number"/>
                <label for="" class="label">Phone Number</label>
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="email"/>
                <label for="" class="label">Email</label>
              </div>
              <div class="container">
                <input type="text" class="input" placeholder="a" name="state"/>
                <label for="" class="label">State</label>
              </div>
              <!-- <div class="container">
                <label for="gender" class="label">Gender</label>
                
                <label for="Male">Male</label><br>
                  <input type="radio" id="html" name="gender" value="Male">
                <label for="Female">Female</label><br>
                <input type="radio" id="html" name="gender" value="Female">
                
              </div> -->
              <div class="container">
                <input type="text" class="input" placeholder="a" name="Payscale"/>
                <label for="" class="label">Payscale/1hr</label>
              </div>
              
              <div class="container">
                <input type="text" class="input" placeholder="a" name="password">
                <label for="" class="label">Password</label>
              </div>
           
<!--         
              <div class="container">
                <input type="text" class="input" placeholder="a" name="password">
                <label for="" class="label">Confirm Password</label>
              </div> -->
              <h4>Upload Profile Photo</h4>
              <input type="file" class="input1" id="myFile" name="filename">
              <input type="submit" class="submitBtn" value="Add" />
              
            </form>
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
