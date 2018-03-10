@extends('layouts.web')

@section('sucursales')

<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: auto;
    padding: 10px;
    heigth: 350px;
   
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    height: 350px;
}
</style>

<div class="row">
  <div class="column">
	<div id="map" style="width:350px;height:250px"></div>


	<script>
	function myMap() {
	  var myCenter = new google.maps.LatLng(-34.57829872638948,-58.41287702322006);
 	  var mapCanvas = document.getElementById("map");
 	  var mapOptions = {center: myCenter, zoom: 17};
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  var marker = new google.maps.Marker({position:myCenter});
	  marker.setMap(map);
	}
	</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

  </div>
  <div class="column">
	<h2>Anabella</h2>
	<h5>Direccion: Av. Cerviño 3379</h5>
	<h5>Telefono: 4801-8350</h5>
  </div>
</div>
@endsection