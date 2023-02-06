@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">Countries</div>
                <ul class="card-body list-group text-white bg-secondary">
                    @forelse($c as $country)
                    <li class="list-group-item bg-dark text-white m-3">
                        <h2 class="c-name"> {{$country->title}}</h2>
                        <div class="col-6">
                            <p>Season start: {{$country->season_start}}</p>
                            <p>Season end: {{$country->season_end}}</p>
                        </div>
                        <a class="col-4 btn btn-info" href="{{route('h-index2')}}?filter={{$country->id}}">Show hotels</a>
                    </li>
                    @empty
                    <li class="list-group-item list-group-item-dark">
                        <h2 class="c-name">No destinations</h2>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
