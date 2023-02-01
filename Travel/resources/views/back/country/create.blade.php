@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Naujos šalies pridėjimas</div>

                <div class="card-body">
                    <form action="{{route('c-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Šalies pavadinimas</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sezono pradžia</label>
                            <input type="date" class="form-control" name="season_start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sezono pabaiga:</label>
                            <input type="date" class="form-control" name="season_end">
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
