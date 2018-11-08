@extends('layouts.app')

@section('content')
    <p>{{ __('Login') }}</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">{{ __('Remember Me') }}</label>

        <button type="submit">{{ __('Login') }}</button>

        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    </form>
@endsection
