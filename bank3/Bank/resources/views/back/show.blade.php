@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Privati sąskaita</h2>
                </div>
                <div class="card-body">
                    <div class="card">
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
                                <form class="col-4">
                                    <input type="text" class="form-control " name="plius">
                                    <button type="submit" class="btn btn-success">
                                        +
                                    </button>
                                </form>
                                <form class="col-4">
                                    <input type="text" class="form-control " name="minus">
                                    <button type="submit" class="btn btn-warning">
                                        -
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="boxer-btn col-12 m-3">
                        <a href="{{route('bank-index')}}" class="btn btn-dark col-3">Grįžti atgal</a>
                        <a href="{{route('bank-edit', $saskaita->id)}}" class="btn btn-secondary col-3">Tvarkyti duomenis</a>
                        <form action="{{route('bank-delete', $saskaita)}}" method="post" class="boxer-form col-3">
                            <button type="submit" class="btn btn-danger col-12" @if($saskaita->suma > 0) disabled @endif>
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
