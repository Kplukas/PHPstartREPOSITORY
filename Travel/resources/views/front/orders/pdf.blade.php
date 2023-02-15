<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order nr.:{{$order->id}}</title>
</head>
<body style="background-color: #FFA07A; text-align: center; margin: 0;">
    <h1>
        @foreach($hotels as $hotel)
        @if($hotel->id == $order->hotel_id)
        Hotel: {{$hotel->name}}
    </h1>
    <h3>Order number: {{$order->id}}</h3>
    <p> Visit from {{$hotel->visit_start}} to {{$hotel->visit_end}}</p>
    @if($hotel->photo == null)
    <img src="https://cdn-icons-png.flaticon.com/512/7985/7985827.png" style="height:400px; width:auto;" alt="{{$hotel->name}}">
    @else
    <img src="{{asset($hotel->photo)}}" style="height:400px; width:auto;" alt="{{$hotel->name}}">
    @endif
    @endif
    @endforeach
    <h2>CONFIRMED</h2>
    <h2 style="margin-left: 230px;">{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</h2>
    <h2 style="margin-left: 220px;">{!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!}</h2>
</body>
</html>
