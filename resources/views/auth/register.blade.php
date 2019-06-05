<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | Sign Up</title>
    <link type="text/css" href="{{ asset('edmin') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('edmin') }}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('edmin') }}/css/theme.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('edmin') }}/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="{{ route('register') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <div class="nav-collapse collapse navbar-inverse-collapse">

                <ul class="nav pull-right">

                    <li>
                        <a href="{{ route('login') }}">
                            Sign In
                        </a>
                    </li>

                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->



<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="module module-login span4 offset4">
                <form method="POST" action="{{ route('register') }}" class="form-vertical">
                    @csrf

                    <div class="module-head">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input id="key" type="text"
                                       class="span12 @error('key') is-invalid @enderror"
                                       name="key" value="{{ old('key') }}"
                                       placeholder="Key" required autocomplete="key" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input id="email" type="email" placeholder="E-Mail Address"
                                       class="span12 @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input id="password" type="password" placeholder="Password"
                                       class="span12 @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input id="password-confirm" type="password" class="span12"
                                       placeholder="Confirm Password"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </div>
                    <div class="module-foot">
                        <div class="control-group">
                            <div class="controls clearfix">
                                <button type="submit" class="btn btn-primary pull-right">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->

<div class="footer">
    <div class="container">
        <b class="copyright">&copy; 2019 ASAHI | Kon-Khmer </b> All rights reserved.
    </div>
</div>
<script src="{{ asset('edmin') }}/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>