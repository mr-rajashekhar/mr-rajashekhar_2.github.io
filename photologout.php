<?php

if(isset($_POST["logout"])){
  SESSION_start();
$id=$_SESSION["id"];

$dir = './userimages/'.$id.'/';
    $img = $_POST['hidden'];
    
    
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $fileData = base64_decode($img);
    $date = date('Y-n-d');
    $fileName = $dir.$date.'-logout.png';
    file_put_contents($fileName, $fileData);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <video id="video" width="640" height="480" autoplay></video>
    <canvas id="canvas" width="640" height="480" name="login"></canvas>
    <button id="snap" style="display: none">Snap Photo</button>
    <form action="photologout.php" method="post">
      <input name="hidden" id="hidden" />
      <input type="submit" name="logout" value="Submit" id="submit" />
    </form>

    <script src="photo.js"></script>
  </body>
</html>
