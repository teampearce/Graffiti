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




<p id="demo"></p>
 

  <script>
var x = document.getElementById("demo");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
	
    } else {
        x.innerHTML = "resart and give permision for location";
    }
  </script>
  
  <script>


 
 </script>


 
 
 
 
 
 
 
 
 <div id="mapid" style="width: 600px; height: 400px;">xcv</div>
<script>

	var mymap = L.map('mapid').setView([51.1, -0.09], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	L.marker([51.1, -0.09]).addTo(mymap);


	
	<?php 



// if (isset($_GET['name'])) {

// $userinput = htmlspecialchars($_GET["name"]);


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
$count=1;
$sql = "select * from engresources WHERE lat IS NOT NULL ORDER BY title ASC LIMIT 20";
$result = $connection->query($sql);
//echo($result);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<a href='"  . $row["url1"]. "'>" . $row["title"]. " </a>"  . " - Name: " . $row["lat"]. " " . $row["creatorauthor"]. " "."<br>",PHP_EOL;
		// L.marker([50.5, 30.5]).addTo(map);
		echo "var marker" . $count  . "= L.marker([" . $row["lat"]. ", " . $row["longi"]."]);\n";
		echo " marker" . $count  . ".bindPopup('" . $row["title"]. "' + '<br/>' + '" . $row["url1"]. "').addTo(mymap);\n";
		$count++;
    }
} else {
    echo "0 results";
}

//echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

mysqli_close($connection);


 ?>
	
	
	
	L.circle([51.508, -0.11], {
		color: 'red', 
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(mymap);

	L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mymap);


</script>

mapbox API token: pk.eyJ1Ijoicm9icGVhcmNlIiwiYSI6ImNqcHp0MHpnbzBlNmgzeHFqNmFpOXMzZzcifQ.00nZeuyhs9ORiWbrvMCdbQ
mapbox public token: pk.eyJ1Ijoicm9icGVhcmNlIiwiYSI6ImNqcHpzd2puYjBlYmU0M3RkeXQ4a2R2NXMifQ.Eb1drxZlhU3EhSb0OcoEfQ
</body>
</html>