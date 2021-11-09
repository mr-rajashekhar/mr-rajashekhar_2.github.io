<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .space{
        height:300px;
      }
    </style>
  </head>
  <body>
    <div class="space"><h1>Hold on while we capture your image..</h1></div>
    <div class="hide" style="display:none"><video id="video" width="320" height="240" autoplay></video>
    <canvas id="canvas" width="320" height="240" name="login"></canvas>
    <button id="snap" style="display: none">Snap Photo</button>
    <form action="empdash.php"  enctype='multipart/form-data' method="post" name="form1">
      <input name="img" id="img" />
      <input type="submit" name="submitbtn" id="submitbtn" />
    </form>
    </div>
    <script src="photo.js"></script>
  </body>
</html>

