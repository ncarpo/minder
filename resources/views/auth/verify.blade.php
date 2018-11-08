@extends('layouts.app')

@section('content')
    <p>{{ __('Verify Your Email Address') }}</p>

    @if (session('resent'))
        <strong>
            {{ __('A fresh verification link has been sent to your email address.') }}
        </strong>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
@endsection
