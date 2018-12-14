<!DOCTYPE html>
<html>
<head>
    @include('partials.meta')
</head>
<body>
    <div id="app">
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
