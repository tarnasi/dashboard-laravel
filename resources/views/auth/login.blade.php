@extends('layouts.admin.auth')

@section('form')

<form method="POST" {{ route('login') }}>
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
    <div class="form-group">
        <label>Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
        <label class="pull-right">
            <a href="{{ route('password.request') }}">Forgotten Password?</a>
        </label>

    </div>
    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
    <div class="register-link m-t-15 text-center">
        <p>Don't have account ? <a href="/register"> Sign Up Here</a></p>
    </div>
</form>

@endsection
