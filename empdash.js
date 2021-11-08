window.onload = function () {
  setInterval(function () {
    getLocation();
  }, 10000);
  function getLocation() {
    // alert(1);
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    }
  }

  function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var id = document.getElementById("id").innerHTML;
    // var data = new FormData();
    // data.append("latitude", latitude);
    // data.append("longitude", longitude);
    var params =
      "update_loc.php?longitude=" + longitude + "&latitude=" + latitude;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", params, true);
    xhr.onload = function () {
      // do something to response
      console.log(this.responseText);
    };
    xhr.send();
  }
};
