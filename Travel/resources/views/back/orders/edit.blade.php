@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Order edit and cofirmation
                </div>
                <div class="card-body">
                    <form action="{{route('o-edit', $order)}}" method="post">
                        <div class="mb-3">
                            <select name="situation" class="form-select">
                                <option value="Awaiting confirmation">Awaiting confirmation</option>
                                <option selected value="Reviewing">Reviewing</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input name="confirmed" class="form-check-input" type="checkbox" value="1" id="ye">
                            <label class="form-check-label" for="ye">
                                Confirm
                            </label>
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
