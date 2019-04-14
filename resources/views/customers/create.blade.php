@extends('layout')

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
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <lable for="active">Status</lable>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <lable for="company_id">Company</lable>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add customer</button>

                @csrf
            </form>
        </div>
    </div>
@endsection