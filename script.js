//set map options
var myLatLng = {lat: , lng: };
var mapOptions = {
	center: myLatLng,
	zoom: 7,
	mapTypeId: google.maps.mapTypeId.ROADMAP
};

//create map
var map = new
google.maps.Map(document.getElemntById('googleMap'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new
google.maps.DirectionsService();

//create a DirectionsService object which we will use to display the route
var directionsDisplay = new
google.maps.DirectionsRenderer();

	//bind the DirectionREnderer to the map
	directionsDisplay.setMap(map);

//define calcRoute function
function calcRoute(){
	//create request
	var request = {
		origin: document.getElemntById("from").value,
		destinations: document.getElemntById("to").value,
		travelMode: google.maps.TravelMode.DRIVING,
	//WALKING, BYCYCLING, TRANSIT
		unitSystem: google.map.UnitSystem.IMPERIAL	
	}

	//pass the request to the route method
	directionsService.route(request, function(result, status){
		//if status ok
		if(status == google.maps.DirectionsStatus.OK){

			//Get distance and time
			$("#output").html("<div class='alert-info'>From: " + document.getElemntById("from").value + ".<br />To: " + document.getElemntById("to").value + ".<br /> Driving distance: " + result.routes[0].legs[0].distance.text + ".<br />Duraimoh: " + result.routes[0].legs[0].duration.text + ".</div>");
			
			//display route
			directionsDisplay.setDirections(result);
		} else{
			//delete route from map
			directionsDisplay.setDirections({routes: []});
			//center map in Louisville
			map.setCenter(myLatLng);
			//show error message
			$("#output").html("<div class='alert-danger'>Could not retrieve driving distance.</div>");
		}
	});
}

//create autocomplete objects for all inputs
var options = {
	types: ['(cities)']
}

var input1 = docutment.getElemntById("from");
var autocomplete1 = new
google.maps.places.Autocomplete(input1, options);

var input 2 = document.getElemntById("to");
var autocomplete2 = new
google.maps.places.Autocomplete(input2, options);
