@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @forelse($hotels as $hotel)
                    <h2> {{$hotel->name}},
                        @foreach($countries as $country)
                        @if ($country->id == $hotel->c_id)
                        {{$country->title}}
                        @endif
                        @endforeach
                    </h2>
                    <p>{{$hotel->visit_start}}</p>
                    <p>{{$hotel->visit_end}}</p>
                    <p>{{$hotel->price}}</p>
                    <form action="{{route('h-delete', $hotel)}}" method="post" class="boxer-form col-3">
                        <button type="submit" class="btn btn-danger col-12">
                            Ištrinti
                        </button>
                        @csrf
                        @method('delete')
                    </form>
                    <a href="{{route('h-edit', $hotel)}}" class="btn btn-secondary">Edit</a>
                    @empty
                    <h2>No hotels</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
