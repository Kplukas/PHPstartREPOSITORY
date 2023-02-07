@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">Orders</div>
                <div class="card-body list-group text-white bg-secondary">
                    @forelse($orders as $order)
                    <div class="p-4 m-2 ms-4 o-list">
                        <h4 class="c-name">Order number: {{$order->id}} @if($order->confirmed == 0)
                            <span class="badge rounded-pill bg-dark">Not approved</span>
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
                        <a class="btn btn-dark col-2 m-2" href="{{ route('o-edit', $order) }}">Edit</a>
                    </div>
                    @empty
                    <h2>No orders yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
