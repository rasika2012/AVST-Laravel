@extends('layouts.web')






@section('content')
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 500px;
                width: 100%;
            }

            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
    <div class="row">
        <div class="col-sm-6 h-100">
            <div id="map"></div>
        </div>
        <div class="col-sm-6 h-100">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Location</th>
                    <th scope="col">Max Speed</th>
                    <th scope="col">Lon/Lat</th>

                    <th scope="col">show</th>
                </tr>
                </thead>
                @foreach ($items as $item)

                    <tr>
                        <th scope="col">{{$item->id}}</th>
                        <th scope="col">{{$item->location}}</th>
                        <th scope="col">{{$item->max_speed}}</th>
                        <th scope="col" class="btn" onclick="setNewLocation({{json_encode($item)}})">{{$item->latitude}} , {{$item->longitude}}</th>
                        <th scope="col"><input type="button" onclick="setNewLocation({{json_encode($item)}})" class="btn" value="show"></th>
                    </tr>
                    </thead>
                @endforeach


            </table>


        </div>
    </div>

    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 7.3086281, lng: 81.6728802},
                zoom: 23
            });
        }

        function setNewLocation(item) {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: parseFloat(item.latitude), lng: parseFloat(item.longitude)},
                zoom: 23
            });

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc3zPW7iomxc1XunorH7FMUr6UCCZvtU&callback=initMap"
            async defer></script>


@endsection