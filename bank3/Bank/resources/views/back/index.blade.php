@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded border border-dark shadow-lg">
                <div class="card-header bg-dark bg-gradient text-light">
                    <h1 class="col-5"> Sąskaitų sąrašas </h1>
                    <form class="col-5">
                        <select class="form-select" aria-label="Default select example" name="by">
                            <option @if($request->by == 'vardas') selected @endif value="vardas">Vardas:</option>
                            <option @if($request->by == 'pavarde') selected @endif value="pavarde">Pavardė:</option>
                            <option @if($request->by == 'more') selected @endif value="more">Likutis didesnis negu:</option>
                            <option @if($request->by == 'less') selected @endif value="less">Likutis mažesnis negu:</option>
                        </select>
                        <input type="text" class="form-control" name="search" value="{{$search}}">
                        <button type="submit">>>>></button>
                    </form>
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
                        <li class="list-group-item shadow">Nėra aktyvių sąskaitų.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
