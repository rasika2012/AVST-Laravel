<?php
/**
 * Created by PhpStorm.
 * User: CHATHURANGA
 * Date: 5/20/2018
 * Time: 12:27 AM
 */
@extends('layouts.web')

@section('content')
    <h1>New</h1>
    <form @submit.prevent="submitFrom">
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="location" >
        </div>
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

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
