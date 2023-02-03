@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Countries</div>

                <div class="card-body">
                    @forelse($c as $country)
                    <h2> {{$country->title}}</h2>
                    <p>{{$country->season_start}}</p>
                    <p>{{$country->season_end}}</p>
                    @empty
                    <h2>No destinations</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
