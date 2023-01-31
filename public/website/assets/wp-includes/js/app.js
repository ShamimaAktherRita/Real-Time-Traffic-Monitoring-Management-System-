

//javascript.js
//set map options

var myLatLng = {lat: 23.7574061755078, lng: 90.36666499898824};
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};


//create map

var map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);



//create a Direction service object to use the route method and get a result for our request

var directionsService = new google.maps.DirectionsService();

// create a DirectionsRenderer object which we will use to display the routes

var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the directionsRenderer to the map

directionsDisplay.setMap(map);


var poly = new google.maps.Polyline({
    strokeColor: '#000000',
    strokeOpacity: 2.0,
    strokeWeight:10,
    map: map
});
var path = poly.getPath();


// function

function calcRoute()
{
    const selectedMode = document.getElementById("mode").value;

    //create request
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode[selectedMode],

        unitSystem: google.maps.UnitSystem.IMPERIAL

    }

    //PASS THE REQUEST TO HE ROUTE METHOD
    directionsService.route(request, function(result, status)
    {
        if(status == google.maps.DirectionsStatus.OK)
        {
            //get distance and time
            const output = document.querySelector('#output');
            output.innerHTML = "<div class = 'alert-info  text-success font-14 bx-font-family'> From: " + document.getElementById("from").value + ".<br/><br />To: " + document.getElementById("to").value + ". <br/><br/> Travel Mode: [" + document.getElementById("mode").value + "]  Distance <i class='fas fa-road'></i> :" + result.routes[0].legs[0].distance.text + ".<br/><br />Duration <i class='fas fa-hourglass-start'></i> :" + result.routes[0].legs[0].duration.text + ". </div>";

            //display route
            directionsDisplay.setDirections(result);

        }else{
            //direct route from map
            directionsDisplay.setDirections({routes: [] });

            //center map in BD
            map.setCenter(myLatLng);

            //show error message
            output.innerHTML = "<div class = 'alert-danger text-danger font-14'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance. </div>";
        }
    });

}

//create autocomplete objects for all input
var options = {
    types: []
}
var option = {
    types: ['parking']
}
var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1,options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2,options);

var input3 = document.getElementById("park");
var autocomplete3 = new google.maps.places.Autocomplete(input3,option);

var infoWindow = new google.maps.InfoWindow();

const locationButton = document.createElement("button");
const searchButton = document.createElement('search');

locationButton.textContent = "Pan to Current Location";
searchButton.textContent = "Search";
locationButton.classList.add("custom-map-control-button");
searchButton.classList.add("custom-map-control-button");

map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
map.controls[google.maps.ControlPosition.TOP_RIGHT].push(searchButton);
locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent("Location found.");
                infoWindow.open(map);
                map.setCenter(pos);

            },
            () => {
                handleLocationError(true, infoWindow, map.getCenter());
            }
        );
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
});

searchButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                infoWindow.setPosition(pos);
                infoWindow.open(map);
                map.setCenter(pos);
                getNearbyPlaces(pos);

            },
            () => {
                handleLocationError(true, infoWindow, map.getCenter());
            }
        );
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
});


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

window.initMap = initMap;

function getNearbyPlaces(position) {
let request = {
    location : position,
    rankBy : google.maps.places.RankBy.DISTANCE,
    keyword : 'sushi'
};
service = new google.maps.places.PlacesService(map);
service.nearbySearch(request, nearbyCallback);
}


function nearbyCallback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker(results[i]);
        }
    }
}

function createMarker(places) {
places.forEach(place => {
    let marker = new google.maps.Marker({
        position: place.geometry.location,
    map: map,
        title: place.name
    });
    bounds.extend(place.geometry.location);
});
map.fitBounds(bounds);
}
