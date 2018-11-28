@extends('layouts.auth')

@section('content')
    <p>{{ __('Reset Password') }}</p>

    @if (session('status'))
        {{ session('status') }}
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <button type="submit">{{ __('Send Password Reset Link') }}</button>
    </form>
@endsection
