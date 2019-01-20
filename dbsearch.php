<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="./leaflet/leaflet.css" />
<script src="./leaflet/leaflet.js"></script>



<style>
body {
    background-color: linen;
}

#mapid { height: 180px; } 
    #map{ width: 400px; height: 300px; }
</style>

</ head>
<body>


// create a get form to allow wildcard title searches. Sort the output alphabetically

<form action="" method="get">
Partial title: <input type="text" name="name"><br>

<input type="submit">
</form>



<p id="demo"></p>
 
  <div id="map"></div>
  
  <script>
var x = document.getElementById("demo");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
	
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
	
	function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}

// https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png
  // initialize the map
  var map = L.map('map').setView([42.15, -71.08], 13);

  // load a tile layer
  L.tileLayer('http://tiles.mapc.org/basemap/{z}/{x}/{y}.png',
    {
      attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',
      maxZoom: 17,
      minZoom: 9
    }).addTo(map);

  </script>
  
  <script>

<?php 



if (isset($_GET['name'])) {

$userinput = htmlspecialchars($_GET["name"]);

// select * from bkbooklist;  select * from engresources;
$servername = "localhost";
$username = "webuser";
$password = "1Ale2Mas!";




$connection = mysqli_connect($servername, $username, $password, "leresources");

if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "select * from engresources WHERE title LIKE '%". $userinput. "%' ORDER BY title ASC LIMIT 20";
$sql = "select * from engresources WHERE lat IS NOT NULL ORDER BY title ASC LIMIT 20";
$result = $connection->query($sql);
//echo($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='"  . $row["url1"]. "'>" . $row["title"]. " </a>"  . " - Name: " . $row["lat"]. " " . $row["creatorauthor"]. " "."<br>",PHP_EOL;
		// L.marker([50.5, 30.5]).addTo(map);
		echo "var newMarker = new L.marker(" . $row["lat"]. ", " . $row["longi"].").addTo(map);";
		
    }
} else {
    echo "0 results";
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

mysqli_close($connection);

}
 ?>
 </ script>




 

 
 





  <script>



  </script>
  
</body>
</html>