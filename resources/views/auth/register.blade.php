@extends('layouts.auth')

@section('content')
    <div class="card padding auth-form mb-3">
        <header class="mb-3">{{ __('Register') }}</header>
        <form method="POST" action="{{ route('register') }}" class="flex flex-column">
            @csrf
            <div class="mb-2">
                <label for="name" class="db w-100 mb-1">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="db w-100" required autofocus>
                @if ($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="mb-2">
                <label for="email" class="db w-100 mb-1">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="db w-100" required>
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
            <button type="submit">{{ __('Register') }}</button>
        </form>
    </div>
    <a href="{{ route('login') }}" class="button hollow pink">Already have an account? Login</a>
@endsection
