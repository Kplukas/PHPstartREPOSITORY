@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">New hotel</div>
                <div class="card-body list-group text-white bg-secondary">
                    <form action="{{route('h-store')}}" method="post" class="col-10 ms-5 p-3" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label c-name">Hotel name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Visit start:</label>
                            <input type="date" class="form-control" name="visit_start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Visit end:</label>
                            <input type="date" class="form-control" name="visit_end">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Price:</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Country</label>
                            <select name="cid" class="form-select">
                                @foreach($country as $c)
                                <option name="cid" value="{{$c->id}}">{{$c->title}}{{$c->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label c-name">Photo</label>
                            <input type="file" class="form-control" name="photo">
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
