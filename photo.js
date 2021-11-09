var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");
var video = document.getElementById("video");

window.onload = function () {
  // Get access to the camera!

  if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices
      .getUserMedia({ video: true })
      .then(function (stream) {
        video.srcObject = stream;
        video.play();
      });
  }
  var snap = document.getElementById("snap");
  document.getElementById("snap").addEventListener("click", function () {
    context.drawImage(video, 0, 0, 640, 480);
    var dataURL = canvas.toDataURL("image/png");
    console.log(dataURL);
    document.getElementById("img").value = dataURL;
    // document.forms["form1"].submit();
  });
  var n = 2;
  (function submit() {
    if (n > 0) {
      setTimeout(submit, 2000);
      n--;
    }
    snap.click();
  })();
  setInterval(function () {
    // document.forms["form1"].submit();
    document.getElementById("submitbtn").click();
  }, 5000);
};
