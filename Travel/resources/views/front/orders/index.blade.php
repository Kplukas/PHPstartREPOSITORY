@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My orders</div>

                <div class="card-body">
                    @forelse($orders as $order)
                    <h2>
                        @foreach($hotels as $hotel)
                        @if($hotel->id == $order->hotel_id)
                        {{$hotel->name}}
                        @endif
                        @endforeach
                    </h2>
                    <p>{{$order->situation}}</p>
                    @empty
                    <h2>No orders yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
