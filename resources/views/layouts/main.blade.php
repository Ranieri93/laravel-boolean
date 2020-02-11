<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('layouts.footer')
</html>
