@extends('layouts.auth')

@section('content')
    <div class="card padding auth-form mb-3">
        <header class="mb-3">{{ __('Reset Password') }}</header>
        <form method="POST" action="{{ route('password.update') }}" class="flex clex-column">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-2">
                <label for="email" class="db w-100 mb-1">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" class="db w-100" required autofocus>
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="mb-2">
                <label for="password" class="db w-100 mb-1">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" class="db w-100" required>
                @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="mb-2">
                <label for="password-confirm" class="db w-100 mb-1">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" name="password_confirmation" class="db w-100" required>
            </div>
            <button type="submit">{{ __('Reset Password') }}</button>
        </form>
    </div>
@endsection
