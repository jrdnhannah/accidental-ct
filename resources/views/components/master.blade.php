<!DOCTYPE html>
<html>
    @include('components.head')
    <body>
        @if (!request()->user())
            @include('components.topBar')
        @endif

        <div id="main">
            @yield('content')
        </div>
    </body>
    @include('components.script')
</html>
