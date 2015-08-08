@extends('layouts.front')

@section('content')
    <style>
        html,
        body,
        #map {
            margin-top: 20px;
            position: relative;
            padding-bottom: 65%; // This is the aspect ratio
            height: 0;
            overflow: hidden;
        }

        #map {
            background: #58B;
        }

        #map iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
    <div id="map"></div>
@stop

@section('page-script')
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <ul id="instructions"></ul>
    <script src="/assets/js/gmaps.js"></script>
    <script>
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

        map.addStyle({
            styledMapName:"Styled Map",
            styles: mapStyle,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");

        GMaps.geolocate({
            success: function(position) {
                map.setCenter(position.coords.latitude, position.coords.longitude);
                map.addMarker({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                    title: 'You are here',
                    infoWindow: {
                        content: '<p>You are here</p>'
                    }
                });

                map.addMarker({
                    lat: 14.55609,
                    lng: 121.02189,
                    title: 'Destination',
                    icon: '/assets/img/mapicon.png',
                    infoWindow: {
                        content: '<p>You are here</p>'
                    }
                });

                map.travelRoute({
                    origin: [position.coords.latitude, position.coords.longitude],
                    destination: [14.55609, 121.02189],
                    travelMode: 'driving',
                    step: function(e) {
                        $('#instructions').append('<li>'+e.instructions+'</li>');
                        $('#instructions li:eq(' + e.step_number + ')').delay(450 * e.step_number).fadeIn(200, function() {
                            map.drawPolyline({
                                path: e.path,
                                strokeColor: 'red',
                                strokeOpacity: 0.6,
                                strokeWeight: 6
                            });
                        });
                    }
                });
            },
            error: function(error) {
                alert('Geolocation failed: '+error.message);
            },
            not_supported: function() {
                alert("Your browser does not support geolocation");
            }
        });
    </script>
@stop