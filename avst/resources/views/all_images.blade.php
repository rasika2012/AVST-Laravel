@extends('layouts.web')

@section('content')

    <nav class="navbar fixed-bottom   navbar-expand navbar navbar-default ">
        <div class="navbar-header col-md-offset-2">
            <div class="navbar-header">
                <a class="panel-heading">Search Options
                </a>
            </div>
            <div class="navbar-header">
                <div class="row">
                    <h2>Filter Location </h2>
                    <input type="text" class="  search-query form-control" placeholder="Search"/>
                    <button class="btn bg" type="button">
                        <span class="">Search</span></button>
                </div>
            </div>

            <div class="navbar-header navbar-left">
                <div class="row">
                    <h2>Time </h2>
                    <input type="text" class="  search-query form-control" placeholder="Search"/>
                    <button class="btn bg" type="button">
                        <span class="">Search</span></button>
                </div>
            </div>

        </div>
    </nav>
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div></div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost:8000/{{$item->image}} " alt="Card image cap"
                                 width="150" height="125">
                            <div class="card-body">


                                <p class="card-text">{{$item->location}}</p>
                                <p class="card-text">Speed:{{$item->speed}}<br>
                                    Speed limit:{{$item->speed}}</p>

                                <button class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">
                                    more..
                                </button>
                                <a href="./delete/{{$item->id}}" class="btn btn-danger">X</a>
                            </div>
                        </div>
                        <br>
                    </div>

                @endforeach

            </div>

            <!-- Button trigger modal -->


            <!-- Modal -->


            <div class="modal fade  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">more info..</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection