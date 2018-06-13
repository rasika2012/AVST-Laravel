@extends('layouts.web')

@section('content')

    <nav class="navbar fixed-bottom bg-light navbar-expand navbar navbar-default  ">
        <form method="get" action="/locationimage">
            <ul class="navbar-nav db">
                <li class="nav-item active">
                <li>
                    <input type="text" class="form-control" name="searchText" id="searchText" onchange="setup()"
                           placeholder="Location Search"/></li>
                </li>
                <li class="nav-item active">
                    <input type="submit" class="btn" value="Search">

                </li>
            </ul>

        </form>

    </nav>

    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div></div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/{{$item->image}} " alt="Card image cap"
                                 width="150" height="125">
                            <div class="card-body">

                                <p class="card-text">{{$item->location}}<br>
                                    {{$item->updated_at}}<br>
                                    Speed:{{$item->speed}}<br>
                                    Speed limit:{{$item->speed}}</p>

                                <button class="btn btn-primary" onclick="forwardTodes({{json_encode($item)}})"
                                        data-toggle="modal"
                                        data-target="#myModal">
                                    open
                                </button>
                                <a href="./delete/{{$item->id}}" class="btn btn-danger">X</a>
                            </div>
                        </div>
                        <br>
                    </div>

                @endforeach

            </div>
            <div class="modal fade  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Snap</h4>
                        </div>

                        <div class="modal-body" id="description">
                            <img class="card-img-top" src="http://localhost:8000/ " width="20" height="20"
                                 alt="Card image cap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function forwardTodes(item) {
            document.getElementById("description").innerHTML = "speed:" + item.speed + "<br>Location:" + item.location;
//http://localhost:8000/
            var image = document.createElement("img");
            var imageParent = document.getElementById("description");
            image.id = "Id";
            image.className = "class";
            image.width = 450;
            image.src = "/" + item.image;
            imageParent.appendChild(image);

        }

    </script>
@endsection