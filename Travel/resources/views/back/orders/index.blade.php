@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">
                    @forelse($orders as $order)
                    <h4>Order number: {{$order->id}} @if($order->confirmed == 0)
                        <span class="badge rounded-pill bg-secondary">Not approved</span>
                        @else
                        <span class="badge rounded-pill bg-success">Approved</span>
                        @endif
                    </h4>
                    @foreach($users as $user)
                    @if($user->id == $order->client_id)
                    <h2>Client: {{$user->name}} || @foreach($hotels as $hotel)
                        @if($hotel->id == $order->hotel_id)
                        Hotel: {{$hotel->name}} || Price: {{$hotel->price}}
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                    </h2>
                    <a class="btn btn-info" href="{{ route('o-edit', $order) }}">Edit</a>
                    @empty
                    <h2>No orders yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
