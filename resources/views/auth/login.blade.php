@extends('layouts.auth')

@section('content')
    <div class="card padding auth-form mb-2">
        <header class="mb-3">{{ __('Login') }}</header>

        <form method="POST" action="{{ route('login') }}" class="flex flex-column">
            @csrf
            <div class="mb-2">
                <label for="email" class="db w-100 mb-1">{{ __('E-Mail Address') }}</label>
                <input id="email"
                 type="email" name="email" value="{{ old('email') }}" class="db w-100" required autofocus>
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
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                <label for="remember">{{ __('Remember Me') }}</label>
            </div>
            <button type="submit" class="mb-2">{{ __('Login') }}</button>
        </form>
    </div>
    <a href="{{ route('password.request') }}" class="button hollow">{{ __('Forgot Your Password?') }}</a>
@endsection