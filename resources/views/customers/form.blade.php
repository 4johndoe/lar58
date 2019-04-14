@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="email" value="{{ old('email')  ?? $customer->email }}" class="form-control">
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <lable for="active">Status</lable>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>
                {{ $activeOptionValue }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <lable for="company_id">Company</lable>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : ''}}>
                {{ $company->name }}
            </option>
        @endforeach
    </select>
</div>