@extends('layouts.web')

@section('content')
    <style>

        #map {
            height: 400px;
            width: 100%;

        }


    </style>
    <div class="panel-body">

        <div class="row h-100">
            <div class="col-sm-6 h-100">

                <form class="form-control " method="post" action="{{ url('/addNewUnit') }}">
                    <div class="row form-group">
                        <label class=" col-md-3">Location</label>
                        <input type="text" class="form-control col-sm-6" name="location" placeholder="Location name">
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="form-group row">
                        <label for="email" class="col-md-3">Speed Limit</label>

                        <input type="text" class="form-control col-md-6" name="max_speed" placeholder="speed limit">

                    </div>


                    <div class="form-group row">
                        <label class="col-md-3">Longitude</label>
                        <input type="text" class="form-control col-md-6" id="lng" name="longitude" placeholder="Longitude">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Latitude</label>
                        <input type="text" class="form-control col-md-6" id="lat" name="latitude" placeholder="Latitude">
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3">unitId</label>
                        <input type="text" class="form-control col-md-6" name="unitId" placeholder="unitId">
                    </div>
                    <div class="float-right form-group">
                    <button type="submit" class="btn ">Add</button>
                    </div>
                </form>

            </div>

                <div class="form-control col-sm-6 h-100">
                    <div>
                        <div id="map"></div>
                    </div>
                </div>

        </div>
        <script>
            var map;

            function initMap() {
                var myLatLng = {lat: 7.2518593 , lng: 80.5919297};
                map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom:8
                });
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Hello World!'
                });
                google.maps.event.addListener(map, 'dblclick', function(e) {
                    var positionDoubleclick = e.latLng;
                    marker.setPosition(positionDoubleclick);
                    console.trace(positionDoubleclick);
                    document.getElementById("lng").value=positionDoubleclick.lng();
                    document.getElementById("lat").value=positionDoubleclick.lat()  ;
                    // if you don't do this, the map will zoom in
                });
            }





        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc3zPW7iomxc1XunorH7FMUr6UCCZvtU&callback=initMap"
                async defer></script>
    </div>

@endsection
