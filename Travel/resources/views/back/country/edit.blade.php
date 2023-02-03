@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Country</div>

                <div class="card-body">
                    <form action="{{route('c-edit', $country)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Country name:</label>
                            <input type="text" class="form-control" name="title" value="{{$country->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Season start:</label>
                            <input type="date" class="form-control" name="season_start" value="{{$country->season_start}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Season end:</label>
                            <input type="date" class="form-control" name="season_end" value="{{$country->season_end}}">
                        </div>
                        <button type="submit" class="btn btn-secondary">Save</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
