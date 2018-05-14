@extends('layouts.web')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1 class="panel-heading">Update Code to Units</h1>
        <div class="panel panel-default">

            <div></div>

            <div class="panel-body">
                <form class="form-horizontal" method="GET" action="/uoload/code">


                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Software Version</label>
                        <div class="col-md-6">
                            <input id="author" type="text" class="form-control" name="Author" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Comments</label>
                        <div class="col-md-6">
                            <input id="author" type="text" class="form-control" name="Author" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Code(*.py)</label>
                        <div class="col-md-6">
                            <textarea id="author" rows="20" type="text" class="form-control" name="Author" required autofocus></textarea>
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
        </div>
    </div>
@endsection