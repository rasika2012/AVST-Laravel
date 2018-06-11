@extends('layouts.web')

@section('content')

    <head>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>

            #map {
                height: 100%;

            }
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
    <div class="row h-100">
        <div class="col-sm-6 h-100">
            <div id="map"></div>
        </div>
        <div class="col-sm-6 h-100" style="background-color:pink;">
            <div class="row">
                @foreach ($items as $item)
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">{{$item->caption}}</h5>
                            <p class="card-text">{{$item->news}}</p>
                            <a href="#" class="btn btn-danger btn-sm">X</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc3zPW7iomxc1XunorH7FMUr6UCCZvtU&callback=initMap"
            async defer></script>


@endsection