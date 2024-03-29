@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">My orders</div>
                <div class="card-body  text-white bg-secondary">
                    @forelse($orders as $order)
                    <div class="bg-dark text-white m-3 p-3">
                        <h2 class="c-name">
                            @foreach($hotels as $hotel)
                            @if($hotel->id == $order->hotel_id)
                            Hotel: {{$hotel->name}}
                            @endif
                            @endforeach
                            @if($order->situation == 'Awaiting confirmation')
                            <span class="badge rounded-pill bg-secondary">{{$order->situation}}</span>
                            @elseif($order->situation == 'Laukiama peržiūros')
                            <span class="badge rounded-pill bg-secondary">Awaiting confirmation</span>
                            @elseif($order->situation == 'Cancelled')
                            <span class="badge rounded-pill bg-danger">{{$order->situation}}</span>
                            @elseif($order->situation == 'Reviewing')
                            <span class="badge rounded-pill bg-info text-dark">{{$order->situation}}</span>
                            @else
                            <span class="badge rounded-pill bg-success">{{$order->situation}}</span>
                            @endif
                        </h2>
                        <p>
                            @foreach($hotels as $hotel)
                            @if($hotel->id == $order->hotel_id)

                            @foreach($countries as $country)
                            @if($hotel->c_id == $country->id)
                            {{$country->title}} || {{$hotel->price}} &euro;
                            @endif
                            @endforeach
                        </p>
                        <p>
                            Visit from {{$hotel->visit_start}} to {{$hotel->visit_end}}.
                        </p>
                        @if($order->confirmed == true)
                        <p>
                            <a href="{{route('o-pdf', $order)}}" class="btn btn-secondary">Download pdf</a>
                        </p>
                        @endif
                    </div>
                    @endif
                    @endforeach
                    @empty
                    <h2>No orders yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
