@extends('layouts.web')

@section('content')
    <h1>New</h1>
    <form @submit.prevent="submitFrom">
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="location" >
        </div>
        <div class="form-group">
            <label>Path</label>
            <input type="text" name="path" placeholder="path" >
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file"  name="Image"  placeholder="Image">
        </div>



        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection