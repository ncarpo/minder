@extends('layouts.auth')

@section('content')
    <div class="card padding auth-form mb-3">
        <header class="mb-3">{{ __('Reset Password') }}</header>
        @if (session('status'))
            {{ session('status') }}
        @endif
        <form method="POST" action="{{ route('password.email') }}" class="flex flex-column">
            @csrf
            <div class="mb-2">
                <label for="email" class="db w-100 mb-1">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="db w-100" required>
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <button type="submit">{{ __('Send Password Reset Link') }}</button>
        </form>
    </div>
@endsection
