@extends('layouts.web')






@section('content')
    <p>Settings</p>

    <form class="form-horizontal" method="GET" action="/addNews">


        <div class="form-group">
            <label for="email" class="col-md-4 control-label">News Topic</label>
            <div class="col-md-6">
                <input id="author" type="text" class="form-control" name="topic" required autofocus>
            </div>
        </div>


        <div class="form-group">
            <label for="email" class="col-md-4 control-label">News in text</label>
            <div class="col-md-6">
                <textarea id="author" rows="5" type="text" class="form-control" name="news" required autofocus></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Upload News
                </button>
            </div>
        </div>
    </form>
@endsection