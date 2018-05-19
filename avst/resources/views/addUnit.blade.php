
@extends('layouts.web')

@section('content')
    <h1>New Unit</h1>
    <form  method="post" action="{{ url('/addNewUnit') }}">
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="location" >
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>max_speed</label>
            <input type="text" name="max_speed" placeholder="max_speed" >
        </div>
        <div class="form-group">
            <label>longitude</label>
            <input type="text" name="longitude" placeholder="longitude" >
        </div>
        <div class="form-group">
            <label>latitude</label>
            <input type="text" name="latitude" placeholder="latitude" >
        </div>
        <div class="form-group">
            <label>altitude</label>
            <input type="text" name="altitude" placeholder="altitude" >
        </div>

        <button type="submit" >Submit</button>
    </form>
@endsection
