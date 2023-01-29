@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded border border-dark shadow-lg">
                <div class="card-header bg-dark bg-gradient text-light">
                    <h1 class="col-5" style="display: inline; float: left;"> Sąskaitų sąrašas </h1>
                    <div class="col-5" style="display: inline-block;">
                        <a class="btn btn-light" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Paieška</a>
                        <form class="collapse multi-collapse" id="multiCollapseExample1">
                            <select class="form-select col-5 mt-3" aria-label="Default select example" name="by">
                                <option @if($request->by == 'vardas') selected @endif value="vardas">Vardas:</option>
                                <option @if($request->by == 'pavarde') selected @endif value="pavarde">Pavardė:</option>
                                <option @if($request->by == 'more') selected @endif value="more">Likutis didesnis negu:</option>
                                <option @if($request->by == 'less') selected @endif value="less">Likutis mažesnis negu:</option>
                            </select>
                            <input type="text" class="form-control col-5 mt-3" style="width: 50%; display:inline" name="search" value="{{$search}}">
                            <button class="btn btn-light" type="submit">Ieškoti</button>
                        </form>
                    </div>
                </div>
                <div class="card-body bg-dark">
                    <ul class="list-group">
                        @forelse($saskaitos as $saskaita)
                        <li class="list-group-item bg-light bg-gradient">
                            <div class="list-table">
                                <div class="list-table__content">
                                    <h3>{{$saskaita->pavarde}}, {{$saskaita->vardas}}</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$saskaita->s_nr}}</h6>
                                </div>
                                <div class="list-table__content">
                                    <h3 class="list-group-item sum">{{$saskaita->suma}} &euro;</h3>
                                </div>
                                <div class="list-table__buttons">
                                    <a href="{{route('bank-show', $saskaita->id)}}" class="btn btn-dark">>>></a>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item shadow">Nėra sąskaitų.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
