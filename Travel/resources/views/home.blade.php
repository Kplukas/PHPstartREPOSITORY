@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="card-header text-white bg-dark c-head pt-3">Welcome!</h2>
            <div id="carouselExampleCaptions" class="carousel slide home-slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach($hotels as $hotel)
                    @if($hotel->id == 6)
                    <div class="carousel-item active">
                        <img src="{{asset($hotel->photo)}}" class="d-block w-100" alt="{{$hotel->name}}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$hotel->name}}</h5>
                            <p>{{$hotel->price}} &euro; | From: {{$hotel->visit_start}} | To: {{$hotel->visit_end}}</p>
                        </div>
                    </div>

                    @elseif($hotel->id == 7)
                    <div class="carousel-item active">
                        <img src="{{asset($hotel->photo)}}" class="d-block w-100" alt="{{$hotel->name}}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$hotel->name}}</h5>
                            <p>{{$hotel->price}} &euro; | From: {{$hotel->visit_start}} | To: {{$hotel->visit_end}}</p>
                        </div>
                    </div>

                    @elseif($hotel->id == 8)

                    <div class="carousel-item active">
                        <img src="{{asset($hotel->photo)}}" class="d-block w-100" alt="{{$hotel->name}}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$hotel->name}}</h5>
                            <p>{{$hotel->price}} &euro; | From: {{$hotel->visit_start}} | To: {{$hotel->visit_end}}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
