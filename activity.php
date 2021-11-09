<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="activity.css">
</head>
<body>
<div class="y" id="googleMap">

</div>
<div class="x">
<table>
  <tr>
    <th>S. No.</th>
    <th>Date</th>
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Map</th>
    <th>Login Image</th>
    <th>Logout Image</th>
  </tr>
 
  <?php
  
  $temp=' <tr>
  <td>%s%</td>
  <td>%date%</td>
  <td>%latitude%</td>
  <td>%longitude%</td>
  <td><button onclick="myMap(%latitude%,%longitude%)">map</button></td>
  <td><a href="userimages/%date%-%id%-login.png"><button>Show Image</button></a></td>
  <td><a href="userimages/%date%-%id%-logout.png"><button>Show Image</button></a></td>
</tr>';
  
 
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
  $url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$url_components = parse_url($url);
 
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$id=$params["id"];
  
  $connect = new mysqli("sql11.freesqldatabase.com","sql11449131","5VrzvwfXZe","sql11449131");
  $sql="SELECT * FROM activity where id ='$id' ";
  $res= $connect -> query($sql);
  $s=1;
  if($res->num_rows !=0){
        
    while($data = $res -> fetch_assoc()){
        $latitude=$data["latitude"];
        $longitude=$data["longitude"];
        $date=$data["date"];
        $temp1= str_replace("%s%",$s,$temp);
        $temp1= str_replace("%date%",$date,$temp1);
        $temp1= str_replace("%id%",$id,$temp1);
        $temp1= str_replace("%latitude%",$latitude,$temp1);
        $temp1= str_replace("%longitude%",$longitude,$temp1);
        echo $temp1;
        $s++;
        
    }

  }

  
  
  
  
  
  
  
  
  ?>
  
</table>
</div>
<script src="activity.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7KUGe0CHwd33sFmugCmEcz1Jjz0fJIA&callback=myMap"></script>
</body>
</html>


