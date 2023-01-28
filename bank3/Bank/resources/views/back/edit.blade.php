@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded border border-dark">
                <div class="card-header  bg-dark bg-gradient text-light">
                    <h1>Sąskaitos redagavimas</h1>
                </div>
                <div class="card-body bg-dark text-light">
                    <form action="{{route('bank-update', $saskaita)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Vardas</label>
                            <input type="text" class="form-control" name="vardas" value="{{$saskaita->vardas}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pavardė</label>
                            <input type="text" class="form-control" name="pavarde" value="{{$saskaita->pavarde}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asmens kodas:</label>
                            <input type="text" class="form-control" name="ak" value="{{$saskaita->ak}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Likutis:</label>
                            <input class="form-control" type="text" value="{{$saskaita->suma}}" name="suma">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sąskaitos numeris:</label>
                            <input class="form-control" type="text" value="{{$saskaita->s_nr}}" readonly name="s_nr">
                        </div>
                        <button type="submit" class="btn btn-success">Išsaugoti</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
