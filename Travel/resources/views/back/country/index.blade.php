@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">Countries list</div>
                <div class="card-body list-group text-white bg-secondary">
                    @forelse($c as $country)
                    <div class="list-group-item bg-dark text-white m-3">
                        <h2 class="c-name"> {{$country->title}}</h2>
                        <div class="col-6 d-ib">
                            <p>{{$country->season_start}}</p>
                            <p>{{$country->season_end}}</p>
                        </div>
                        <form action="{{route('c-delete', $country)}}" method="post" class="boxer-form d-ib col-2 m-2">
                            <button type="submit" class="btn btn-danger col-12">
                                Ištrinti
                            </button>
                            @csrf
                            @method('delete')
                        </form>
                        <a href="{{route('c-edit', $country)}}" class="btn btn-secondary col-2 m-2">Edit</a>
                    </div>
                    @empty
                    <h2>No destinations</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
