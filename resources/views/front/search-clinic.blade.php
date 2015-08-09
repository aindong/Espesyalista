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

        #instructionContainer {
            z-index: 999;
            min-height: 50px;
            width: 300px;
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            overflow-y: scroll;
            text-wrap: normal;
        }

        ul#instructions {

        }
    </style>
    <div id="map"></div>

    <div id="instructionContainer" style="display: none;">
        <h4>Instructions:</h4>
        <ul id="instructions"></ul>
    </div>
@stop

@section('page-script')
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="/assets/js/gmaps.js"></script>
    <script src="/assets/js/geolocationmin.js"></script>
@stop