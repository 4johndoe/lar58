@extends('layout')

@section('title', 'Edit Details for ' . $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $customer->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{ $customer->id }}" method="post">
                @method('patch')
                @include('customers.form')

                <button type="submit" class="btn btn-primary">Edit customer</button>

            </form>
        </div>
    </div>
@endsection