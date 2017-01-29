@extends('components.master')

@section('content')
    <div id="login-wrapper" class="section-wrapper">
        <form class="form" method="post" action="{{ route('auth.post_login') }}">
            <div id="login-form">
                <div id="login-real-name-wrapper">
                    <label class="form-label">Email<input type="text" name="email" id="login-real-name-text" /></label>
                </div>
                <div id="login-password-wrapper">
                    <label class="form-label">Password<input type="password" name="password" id="login-password-text" /></label>
                </div>
                <div id="register-or-forgot-password">
                    <span id="register">Register</span>
                    &nbsp;|&nbsp;
                    <span id="forgot-your-password">Forgot your password?</span>
                </div>
                {{ csrf_field() }}
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
@stop