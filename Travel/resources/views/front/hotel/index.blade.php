@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hotels</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse($hotels as $hotel)
                        <li class="list-group-item">
                            <h2> {{$hotel->name}},
                                @foreach($countries as $country)
                                @if ($country->id == $hotel->c_id)
                                {{$country->title}}
                                @endif
                                @endforeach
                            </h2>
                            <p>{{$hotel->visit_start}}</p>
                            <p>{{$hotel->visit_end}}</p>
                            <p>{{$hotel->price}} Eur</p>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <h2>No hotels</h2>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
