<!DOCTYPE html>
<html>
    @include('components.head')
    <body>
        @include('components.top-bar')

        <div id="main">
            @yield('content')
        </div>
    </body>
    @include('components.script')
</html>
