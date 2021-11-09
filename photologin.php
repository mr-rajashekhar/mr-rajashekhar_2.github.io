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
    <form action="empdash.php"  enctype='multipart/form-data' method="post" name="form1">
      <input name="img" id="img" />
      <input type="submit" name="submitbtn" id="submitbtn" />
    </form>

    <script src="photo.js"></script>
  </body>
</html>

