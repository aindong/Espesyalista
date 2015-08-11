@extends('layouts.front')

@section('content')
    <style>
        #map-wrapper {
            background: #58B;
            padding-top: 50px;
        }

        #map {
            position: relative;
            overflow: hidden;
            height: 20px;
            padding-bottom: 45%;
        }

        #map iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }

        #instructionContainer {
            z-index: 999;
            min-width: 50px;
            max-width: 300px;
            width: 100%;
            position: fixed;
            top: 80px;
            right: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            text-wrap: normal;
        }

        #instructionContainer ul {
            overflow-y: scroll;
            min-height: 50px;
            max-height: 350px;
        }
    </style>

    <div id="map-wrapper">
        <div id="map"></div>

        <div id="instructionContainer" style="display: none;">
            <h4>Instructions:</h4>
            <ul id="instructions"></ul>
        </div>
    </div>
@stop

@section('page-script')
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/assets/js/gmaps.js"></script>
    <script src="/assets/js/geolocation.js"></script>
@stop