<!DOCTYPE html>
<html>
<head>
    @include('partials.meta')
</head>
<body>
    <div id="app">
        @include('partials.header')
        @yield('content')
    </div>
</body>
</html>
