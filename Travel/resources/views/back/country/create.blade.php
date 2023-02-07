@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">New Country</div>
                <div class="card-body list-group text-white bg-secondary">
                    <form action="{{route('c-store')}}" method="post" class="col-10 ms-5 p-3">
                        <div class="mb-3">
                            <label class="form-label c-name">Country name:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Season start:</label>
                            <input type="date" class="form-control" name="season_start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Season end:</label>
                            <input type="date" class="form-control" name="season_end">
                        </div>
                        <button type="submit" class="btn btn-dark col-3 mt-3">Create</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
