@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My orders</div>

                <div class="card-body">
                    @forelse($orders as $order)
                    <h2>{{$order->id}}{{$order->client_id}}{{$order->hotel_id}}</h2>
                    @empty
                    <h2>No orders yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
