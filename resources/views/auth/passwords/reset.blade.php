@extends('layouts.app')

@section('content')
    <p>{{ __('Reset Password') }}</p>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>

        <button type="submit">{{ __('Reset Password') }}</button>
    </form>
@endsection
