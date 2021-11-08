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
    document.getElementById("hidden").value = dataURL;
    document.getElementById("submit").click;
  });
  var n = 2;
  (function submit() {
    if (n > 0) {
      snap.click();
      setTimeout(submit, 2000);
      n--;
    }
  })();

  // var dataURL = canvas.toDataURL("image/png");
};
