@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Hotel info edit
                </div>
                <div class="card-body">
                    <form action="{{route('h-edit', $hotel)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Hotel Name:</label>
                            <input type="text" class="form-control" name="name" value="{{$hotel->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Visit start:</label>
                            <input type="date" class="form-control" name="visit_start" value="{{$hotel->visit_start}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Visit end:</label>
                            <input type="date" class="form-control" name="visit_end" value="{{$hotel->visit_end}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price:</label>
                            <input type="text" class="form-control" name="price" value="{{$hotel->price}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select name="cid" class="form-select">
                                @foreach($countries as $c)
                                <option name="cid" value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo">
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
