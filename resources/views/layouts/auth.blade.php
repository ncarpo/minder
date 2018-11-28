<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
</head>
<body>
    @include('partials.header')
    <div class="flex flex-column justify-center items-center screen-width screen-height">
        @yield('content')
    </div>
</body>
</html>
