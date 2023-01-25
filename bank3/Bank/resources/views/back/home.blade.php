@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <h2 class="col-2 home-h2">Valdymas:</h2>
    </div>
    <div class="d-grid gap-5 m-5">
        <a href="{{route('bank-create')}}" class="btn btn-primary btn-lg" type="button">Nauja sąskaita</a>
        <a href="{{route('bank-index')}}" class="btn btn-primary btn-lg" type="button">Sąskaitų sąrašas</a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3 home-col">
                <h2 class="home-h2">Statistika</h2>
                <h3 class="home-p"> Aktyvios sąskaitos: </h3>
                <p class="home-p stats">{{$saskaitos->count()}}</p>
                <?php $suma = 0 ?>
                @foreach($saskaitos as $saskaita)
                <?php $suma += $saskaita->suma ?>
                @endforeach
                <h3 class="home-p"> Bendras sąskaitų likutis:</h3>
                <p class="home-p stats"> {{$suma}} &euro;</p>
            </div>
            <div class="col-2"></div>
            <div class="col-3 home-col">
                <h2 class="home-h2">IT kontaktai</h2>
                <h3 class="home-p">Mega programuotojas: Kristupas Plukas</h3>
                <p class="home-p">Darbo laikas: I-VII 7:00-22:00</p>
                <p class="home-p">Susisiekimas:</p>
                <p class="home-p">Tel: 85566655</p>
                <p class="home-p">E.paštas: Kristupo@elektroninis.com</p>
            </div>
        </div>
    </div>
</div>
@endsection
