@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">Hotels</div>
                <form class="card-header  text-white bg-dark c-head" action="{{route('h-index2')}}">
                    <select class="form-select" aria-label="Default select example" name="filter">
                        <option @if($request->filter == 'all') selected @endif value="all">All</option>
                        @foreach($countries as $country)
                        <option @if($request->filter == $country->id) selected @endif value="{{$country->id}}">{{$country->title}}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control col-5 mt-3" style="width: 50%; display:inline" name="search" value="{{$request->search ?? ''}}">
                    <button class="btn btn-secondary mt-1 ms-1" type="submit">Filter</button>
                </form>
                <div class="card-body text-white bg-secondary">
                    <ul class="list-group list-group-flush">
                        @forelse($hotels as $hotel)
                        <li class="list-group-item bg-dark text-white m-3">
                            <h2 class="c-name"> {{$hotel->name}},
                                @foreach($countries as $country)
                                @if ($country->id == $hotel->c_id)
                                {{$country->title}}
                                @endif
                                @endforeach
                            </h2>
                            <div class="col-6 d-ib">
                                <p>Visit start: {{$hotel->visit_start}}</p>
                                <p>Visit end: {{$hotel->visit_end}}</p>
                                <p>For: {{$hotel->price}} &euro;</p>
                                <form action="{{route('o-store')}}" method="post">
                                    <input type="hidden" name="client_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
                                    <button type="submit" class="btn btn-secondary">Add</button>
                                    @csrf
                                </form>
                            </div>
                            <div class="col-6 d-ib">
                                @if(!$hotel->photo)
                                <img src="https://cdn-icons-png.flaticon.com/512/7985/7985827.png" class="d-block w-50" alt="{{$hotel->name}}">
                                @else
                                <img src="{{asset($hotel->photo)}}" class="d-block w-100" alt="{{$hotel->name}}">
                                @endif
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item  bg-dark text-white m-3">
                            <h2 class="c-name">No hotels</h2>
                            <p>Please select other deals or contact us for information of upcoming hotel deals</p>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
