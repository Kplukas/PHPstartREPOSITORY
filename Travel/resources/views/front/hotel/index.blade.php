@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hotels</div>
                <form class="card-header" action="{{route('h-index2')}}">
                    <select class="form-select " aria-label="Default select example" name="filter">
                        <option @if($request->filter == 'all') selected @endif value="all">All</option>
                        @foreach($countries as $country)
                        <option @if($request->filter == $country->id) selected @endif value="{{$country->id}}">{{$country->title}}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control col-5 mt-3" style="width: 50%; display:inline" name="search" value="{{$request->search ?? ''}}">
                    <button class="btn btn-secondary m-1" type="submit">Filter</button>
                </form>
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
                            <form action="{{route('o-store')}}" method="post">
                                <input type="hidden" name="client_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
                                <button type="submit" class="btn btn-secondary">Add</button>
                                @csrf
                            </form>
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
