@extends('layouts.web')

@section('content')
    <div class="row">
        @foreach ($items as $item)
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sun Up</h4>
                        <p class="card-text">Looks like the Sun has returned. Here's why.</p>
                        <a href="#" class="btn btn-primary">Download Report</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection