@extends('layouts.web')

@section('content')
    <div class="row">
        @foreach ($items as $item)
            <div class="col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="http://localhost:8000/{{$item->image}} "alt="Card image cap"  width="150" height="125">
                    <div class="card-body">
                        <h4 class="card-title">{{$item->location}}</h4>
                        <p class="card-text">path {{$item->image}}</p>
                        <a href="./delete/{{$item->id}}" class="btn btn-primary">Download Report</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection