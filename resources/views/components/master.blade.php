<!DOCTYPE html>
<html>
    @include('components.head')
    <body>
        @include('components.topBar')

        @yield('content')
    </body>
    @include('components.script')
</html>
