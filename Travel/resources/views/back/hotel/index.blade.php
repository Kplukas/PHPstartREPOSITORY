@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">Hotels</div>
                <div class="card-body list-group text-white bg-secondary">
                    <ul class="list-group">
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
                                @if(!$hotel->photo)
                                <img src="https://cdn-icons-png.flaticon.com/512/7985/7985827.png" class="h-img" alt="{{$hotel->name}}">
                                @else
                                <img src="{{asset($hotel->photo)}}" class="h-img">
                                @endif
                            </div>
                            <div class="d-ib mt-3 col-6">
                                <p>{{$hotel->visit_start}}</p>
                                <p>{{$hotel->visit_end}}</p>
                                <p>{{$hotel->price}} Eur</p>
                                <form action="{{route('h-delete', $hotel)}}" method="post" class="boxer-form mt-5">
                                    <a href="{{route('h-edit', $hotel)}}" class="btn btn-secondary col-3">Edit</a>
                                    <button type="submit" class="btn btn-danger col-3 ms-1">
                                        Delete
                                    </button>
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>

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
