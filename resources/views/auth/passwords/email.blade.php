@extends('layouts.admin.auth')

@section('form')

<form method="POST" action="{{ route('password.email') }}>
    @csrf

    <div class="form-group">
        <label>Email address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
</form>

@endsection
