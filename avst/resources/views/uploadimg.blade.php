@extends('layouts.web')

@section('content')

    <h1 class="panel-heading">Update Code to Units</h1>
    <div class="panel panel-default">
        <div></div>
        <div class="row h-100">
            <div class="col-sm-6 h-100">
                <form class="form-horizontal" method="GET" action="/upload/code">


                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Software Version</label>
                        <div class="col-md-6">
                            <input id="author" type="text" class="form-control" name="version" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Comments</label>
                        <div class="col-md-6">
                            <input id="author" type="text" class="form-control" name="comment" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Code(*.py)</label>
                        <div class="">
                            <textarea id="author" rows="20" type="text" class="form-control" name="code" required
                                      autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Upload
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-sm-6 h-100">
                <div class="row">
                    @foreach ($items as $item)

                        <div class="alert alert-dark " style="width: 90%" role="alert">
                            <h4 class="alert-heading">{{$item->version}}</h4>
                            <hr>
                            <p>{{$item->comment}}</p>

                            <p class="mb-0">{{$item->updated_at}}</p>
                            <div class="float-right">
                                <a href="/deleteNews/{{$item->id}}">X</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>



@endsection