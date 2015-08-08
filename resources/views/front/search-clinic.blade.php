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
    <script src="/assets/js/gmaps.js"></script>
    <script>
        var map = new GMaps({
            div: '#map',
            lat: -12.043333,
            lng: -77.028333
        });

        GMaps.geolocate({
            success: function(position) {
                map.setCenter(position.coords.latitude, position.coords.longitude);
                map.addMarker({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                    title: 'You are here',
                    click: function(e) {
                        alert('You clicked in this marker');
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