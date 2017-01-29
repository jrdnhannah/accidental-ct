@extends('components.master')

@section('content')
    <div id="register-form" class="section-wrapper">
        <form class="form" action="{{ route('auth.post_register') }}" method="post">
            <div id="register-real-name-wrapper">
                <label class="form-label">
                    Real name
                    <input type="text" id="register-real-name-text" name="name"/>
                </label>
            </div>
            <div id="register-email-address-wrapper">
                <label class="form-label">
                    Email address
                    <input type="email" id="register-email-address-text" name="email"/>
                </label>
            </div>
            <div id="register-password-wrapper">
                <label class="form-label">
                    Password
                    <input type="password" id="register-password-text" name="password"/>
                </label>
            </div>
            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>
@stop