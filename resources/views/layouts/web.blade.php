<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        <link type="text/css" href="{{ asset('edmin') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('edmin') }}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('edmin') }}/css/theme.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('edmin') }}/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
            <div class="nav-collapse collapse navbar-inverse-collapse">

                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>
                <ul class="nav pull-right">

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Item No. 1</a></li>
                            <li><a href="#">Don't Click</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Example Header</li>
                            <li><a href="#">A Separated link</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>
                         <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                             <li><a href="#">English</a></li>
                             <li><a href="#">Khmer</a></li>
                         </ul>
                    </li>

                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('edmin') }}/images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Your Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="content">
                    @yield('content')
                </div>
                <!--/.content-->
            </div>
            <!--/.span12-->
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.wrapper-->
<div class="footer">
    <div class="container">
        <b class="copyright">&copy; 2019 ASAHI | Kon-Khmer </b>All rights reserved.
    </div>
</div>
<script src="{{ asset('edmin') }}/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="{{ asset('edmin') }}/scripts/common.js" type="text/javascript"></script>

</body>

</html>