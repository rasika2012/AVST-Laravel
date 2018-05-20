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
        <div class="col-sm-3 h-100">
            <div class="rounded" id="map"></div>
        </div>
        <div class="col col-sm-9 h-100">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Location</th>
                    <th scope="col">Max Speed</th>
                    <th scope="col">Lon/Lat</th>
                    <th scope="col">show</th>
                    <th>:</th>
                    <th scope="col">X</th>

                </tr>
                </thead>
                @foreach ($items as $item)

                    <tr>
                        <th scope="col">{{$item->unitId}}</th>
                        <th scope="col">{{$item->location}}</th>
                        <th scope="col">{{$item->max_speed}}</th>
                        <th scope="col" class="btn" onclick="setNewLocation({{json_encode($item)}})"><a >{{$item->latitude}} , {{$item->longitude}}</a></th>
                        <th scope="col"><a href="/locationimage?searchText={{$item->location}}" class="btn" >show..</a></th>
                        <th>:</th>
                        <th scope="col"><a type="button" href="/deleteUnit/{{$item->id}}" class="btn bg-danger" >X</a></th>
                    </tr>
                    </thead>
                @endforeach


            </table>


        </div>
    </div>

    <script>
        var map;

        function initMap() {
            var myLatLng = {lat: -25.363, lng: 131.044};
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 10
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }

        function setNewLocation(item) {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: parseFloat(item.latitude), lng: parseFloat(item.longitude)},
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(item.latitude), lng: parseFloat(item.longitude)},
                map: map,
                title: 'Hello World!'
            });

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc3zPW7iomxc1XunorH7FMUr6UCCZvtU&callback=initMap"
            async defer></script>


@endsection