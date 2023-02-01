@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @forelse($hotels as $hotel)
                    <h2> {{$hotel->title}}</h2>
                    <p>{{$hotel->season_start}}</p>
                    <p>{{$hotel->season_end}}</p>
                    <form action="{{route('h-delete', $hotel)}}" method="post" class="boxer-form col-3">
                        <button type="submit" class="btn btn-danger col-12">
                            Ištrinti
                        </button>
                        @csrf
                        @method('delete')
                    </form>
                    @empty
                    <h2>No hotels</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection