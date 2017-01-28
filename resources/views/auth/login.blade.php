@extends('components.master')

@section('content')
    <div id="login-wrapper" class="section-wrapper">
        <div id="login-form">
            <div id="login-real-name-wrapper">
                <label class="form-label">Real name<input type="text" id="login-real-name-text" /></label>
            </div>
            <div id="login-password-wrapper">
                <label class="form-label">Password<input type="text" id="login-password-text" /></label>
            </div>
            <div id="register-or-forgot-password">
                <span id="register">Register</span>
                &nbsp;|&nbsp;
                <span id="forgot-your-password">Forgot your password?</span>
            </div>
        </div>
    </div>
    <div id="register-form" class="section-wrapper disappear">
        <div id="register-real-name-wrapper">
            <label class="form-label">Real name<input type="text" id="register-real-name-text" /></label>
        </div>
        <div id="register-email-address-wrapper">
            <label class="form-label">Email address<input type="text" id="register-email-address-text" /></label>
        </div>
        <div id="register-password-wrapper">
            <label class="form-label">Password<input type="text" id="register-password-text" /></label>
        </div>
    </div>
@stop