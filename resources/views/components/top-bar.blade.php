<div id="top-bar" class="clearfix">
    @if (!request()->user())
        <div id="login-or-register">
            <span id="login-or-register-text"><a href="{{ route('auth.login') }}">Login</a> / <a href="{{ route('auth.register') }}">Register</a></span>
        </div>
    @endif

    <div id="logo"></div>
</div>