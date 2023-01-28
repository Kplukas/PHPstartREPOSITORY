@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded border border-dark">
                <div class="card-header bg-dark bg-gradient text-light">
                    <h1> Naujos sąskaitos kūrimas </h1>
                </div>
                <div class="card-body bg-dark text-light">
                    <form action="{{route('bank-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Vardas</label>
                            <input type="text" class="form-control" name="vardas">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pavardė</label>
                            <input type="text" class="form-control" name="pavarde">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asmens kodas:</label>
                            <input type="text" class="form-control" name="ak">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sąskaitos numeris:</label>
                            <input class="form-control" type="text" value="LT{{rand(10000000000000, 99999999999999)}}" readonly name="s_nr">

                        </div>
                        <button type="submit" class="btn btn-secondary">Sukurti</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
