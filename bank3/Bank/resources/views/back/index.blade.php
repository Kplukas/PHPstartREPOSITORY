@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1> Sąskaitų sąrašas </h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($saskaitos as $saskaita)

                        <li class="list-group-item">
                            <div class="list-table">
                                <div class="list-table__content">
                                    <h3>{{$saskaita->pavarde}}, {{$saskaita->vardas}}</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$saskaita->s_nr}}</h6>
                                </div>
                                <div class="list-table__content">
                                    <h3 class="list-group-item sum">{{$saskaita->suma}} &euro;</h3>
                                </div>
                                <div class="list-table__buttons">
                                    <a href="{{route('bank-show', $saskaita->id)}}" class="btn btn-dark">>>></a>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">Nėra aktyvių sąskaitų.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
