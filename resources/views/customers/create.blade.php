@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">

                @include('customers.form')

                <button type="submit" class="btn btn-primary">Add customer</button>

            </form>
        </div>
    </div>
@endsection