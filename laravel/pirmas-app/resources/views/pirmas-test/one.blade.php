@extends('layouts.app')

@section('vidus')

@if($number == 1)
<h1> 1 </h1>
@elseif($number == 2)
<h1> 2 </h1>
@elseif($number == 3)
<h1> 3 </h1>
@endif

@endsection
