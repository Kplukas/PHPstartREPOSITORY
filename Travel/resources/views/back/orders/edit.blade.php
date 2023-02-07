@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark c-head">
                    Order edit and cofirmation
                </div>
                <div class="card-body list-group text-white bg-secondary">
                    <form action="{{route('o-edit', $order)}}" method="post" class="col-10 ms-5 p-3">
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
                        <button type="submit" class="btn btn-dark col-3 mt-3">Save</button>

                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
