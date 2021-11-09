function myMap(lat, lng) {
  var mapProp = {
    center: new google.maps.LatLng(lat, lng),
    zoom: 5,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
