(function(){

    var mapStyle = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];

    var map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333,
        panControl : true,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false
    });

    var userPosition = {lat: 0, lng: 0};

    map.addStyle({
        styledMapName:"Styled Map",
        styles: mapStyle,
        mapTypeId: "map_style"
    });

    map.setStyle("map_style");

    // Get all clinics nearby
    $.get('/api/v1/clinics', function(res) {
        console.log(res);
        // Iterate through each location
        $.each(res.data, function(k, v) {
            map.addMarker(createMarker(v))
        });
    });

    var lat = 14.5591271;
    var lng = 121.0300255;

    // Locate user current location
    GMaps.geolocate({
        success: function(position) {
            map.setCenter(position.coords.latitude, position.coords.longitude);
            map.addMarker({
                //lat: position.coords.latitude,
                //lng: position.coords.longitude,
                lat: lat,
                lng: lng,
                title: 'You are here',
                infoWindow: {
                    content: '<p>You are here</p>'
                }
            });

            userPosition.lat = position.coords.latitude;
            userPosition.lng = position.coords.longitude;
        },
        error: function(error) {
            alert('Geolocation failed: '+error.message);
        },
        not_supported: function() {
            alert("Your browser does not support geolocation");
        }
    });

    // Create a marker on the map
    function createMarker(data) {
        return {
            lat: data.location.lat,
            lng: data.location.lon,
            title: 'data.name',
            icon: '/assets/img/mapicon.png',
            infoWindow: {
                content: createContent(data)
            },
            click: function() {
                $('#instructions').html('');
                map.cleanRoute();
                map.travelRoute({
                    origin: [userPosition.lat, userPosition.lng],
                    destination: [data.location.lat, data.location.lon],
                    travelMode: 'driving',
                    step: function(e) {
                        $('#instructionContainer').show();
                        $('#instructions').append('<li>'+e.instructions+'</li>');
                        $('#instructions li:eq(' + e.step_number + ')').delay(200 * e.step_number).fadeIn(200, function() {
                            map.drawPolyline({
                                path: e.path,
                                strokeColor: 'red',
                                strokeOpacity: 0.6,
                                strokeWeight: 6
                            });
                        });
                    }
                });
            }
        };
    }

    // Create infocontent
    function createContent(data)
    {
        var body  = '<h4>' + data.name + '</h4>';
        body += '<strong>Services Offered</strong>';
        body += '<ul>';
        body += '<li>Consultation</li><li>Laboratory</li><li>X-ray</li><li>Ultrasound</li>'
        body += '</ul>';
        body += '<a href="/clinic/' + data.id + '/book" class="btn btn-danger">Book now</a>';
        return body;
    }
}());