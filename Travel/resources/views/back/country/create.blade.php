@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Country</div>
                <div class="card-body">
                    <form action="{{route('c-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Country name:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Season start:</label>
                            <input type="date" class="form-control" name="season_start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Season end:</label>
                            <input type="date" class="form-control" name="season_end">
                        </div>
                        <button type="submit" class="btn btn-secondary">Create</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
