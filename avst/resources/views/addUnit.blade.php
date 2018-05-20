@extends('layouts.web')

@section('content')
    <div class="panel-body">
        <div class="col-md-8 col-md-offset-2 mx-auto">
            <h1>New Unit</h1>
            <form class="form-control" method="post" action="{{ url('/addNewUnit') }}">
                <div class="form-group">
                    <label class="col-md-6" >Location</label>
                    <input type="text" class="form-control col-md-6" name="location" placeholder="Location name">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label for="email" class="col-md-6">Speed Limit</label>

                        <input type="text" class="form-control col-md-6" name="max_speed" placeholder="speed limit">

                </div>


                <div class="form-group">
                    <label  class="col-md-6" >Longitude</label>
                    <input type="text" class="form-control col-md-6" name="longitude" placeholder="Longitude">
                </div>
                <div class="form-group">
                    <label  class="col-md-6" >Latitude</label>
                    <input type="text" class="form-control col-md-6" name="latitude" placeholder="Latitude">
                </div>
                <div class="form-group">
                    <label  class="col-md-6" >Altitude</label>
                    <input type="text" class="form-control col-md-6"  name="altitude" placeholder="Altitude">
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>

@endsection
