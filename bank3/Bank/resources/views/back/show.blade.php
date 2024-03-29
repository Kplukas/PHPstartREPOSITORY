@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded border border-dark">
                <div class="card-header bg-dark bg-gradient text-light">
                    <h2>Privati sąskaita</h2>
                </div>
                <div class="card-body bg-dark">
                    <div class="card  bg-light bg-gradient">
                        <div class="boxer">
                            <div class="boxer-header">
                                Asmens informacija:
                            </div>
                            <div class="boxer-body">
                                <h5 class="card-title">Vardas pavardė: <strong>{{$saskaita->vardas}} {{$saskaita->pavarde}}</strong></h5>
                                <h5 class="card-title">Asmens kodas: <strong>{{$saskaita->ak}} </strong></h5>
                            </div>
                        </div>
                        <div class="boxer">
                            <div class="boxer-header">
                                Sąskaitos nr.:
                            </div>
                            <div class="boxer-body">
                                <h5 class="card-title">{{$saskaita->s_nr}}</h5>
                            </div>
                        </div>
                        <div class="boxer container">
                            <div class="row">
                                <h3 class="col-4">
                                    Likutis: {{$saskaita->suma}} &euro;
                                </h3>
                                <form class="col-4" action="{{route('bank-plus', $saskaita)}}" method="post">
                                    <input type="text" class="form-control " name="plus">
                                    <button type="submit" class="btn btn-success">
                                        +
                                    </button>
                                    @csrf
                                    @method('put')
                                </form>
                                <form class="col-4" action="{{route('bank-minus', $saskaita)}}" method="post">
                                    <input type="text" class="form-control " name="minus">
                                    <button type="submit" class="btn btn-warning">
                                        -
                                    </button>
                                    @csrf
                                    @method('put')
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="boxer-btn col-12 m-3">
                        <a href="{{route('bank-index')}}" class="btn btn-light col-3">Grįžti atgal</a>
                        <a href="{{route('bank-edit', $saskaita->id)}}" class="btn btn-secondary col-3">Tvarkyti duomenis</a>
                        <form action="{{route('bank-delete', $saskaita)}}" method="post" class="boxer-form col-3">
                            <button type="submit" class="btn btn-danger col-12" {{-- @if($saskaita->suma > 0) disabled @endif--}}>

                                Ištrinti
                            </button>
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
