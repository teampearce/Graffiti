<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  
<link rel="stylesheet" href="./leaflet/leaflet.css" />
<script src="./leaflet/leaflet.js"></script>


  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  @font-face {
font-family: "graff";
src: url("fonts/graff.woff");
}
  @font-face {
font-family: "gong";
src: url("fonts/gong.woff");
}
h1 {
font-family: 'graff', Arial, sans-serif;
font-weight:bold
font-style:bold;
}

h2 {
font-family: 'graff', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}

.nav-link {
font-family: 'gong', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}

p {
font-family: 'gong', Arial, sans-serif;
font-weight:normal;
font-style:normal;
}

#mapid { height: 180px; } 
    #map{ width: 200px; height: 170px; }

  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Graffitezy</h1>
  <p>Tag the World</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">tag-it</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">my-tags</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">settings</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>situation</h2>
      
	  <p id="demo"></p>
 

  <script>
var x = document.getElementById("demo");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
	
    } else {
        x.innerHTML = "resart and give permision for location";
    }
	
	function showPosition(position) {
		var currLat = position.coords.latitude;
		var currLong = position.coords.longitude;
		x.innerHTML = "Latitude: " + currLat + "<br>Longitude: " + currLong;
	}
  </script>
	  
	  
      <div class="fakeimg">
	  
	  	  <div id="mapid" ></div>
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


	</script>
	  
	  
	  </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h1>tag-it</h1>
      <h5>choose a spot, choose a style</h5>
      <div class="fakeimg">
	  
	  
	  </div>
      
	  
	  <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TaG-IT</h2>
      <h5>choose a spot and a style</h5>
      <div class="fakeimg">streetview here</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Graffitezy</h1>
  <p>Tag the World</p> 
</div>

</body>
</html>