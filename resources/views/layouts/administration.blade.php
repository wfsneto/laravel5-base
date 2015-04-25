@extends('layouts/default')

@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin :: {{ env('APP_NAME') }}</title>

    <link href="{{ asset('/stylesheets/administration.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@stop

@section('nav')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ action('HomeController@index') }}">{{ env('APP_NAME') }}</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ action('Admin\HomeController@index') }}"> <i class="fa fa-home"></i> Dashboard</a></li>
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="{{ trans('modules.regions.fa_icon') }}"></i>
                                {{ trans('modules.regions.regions') }}
                                <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ action('Admin\RegionsController@index') }}">
                                        <i class="{{ trans('modules.icon_index') }}"></i>
                                        {{ trans('modules.index.f') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ action('Admin\RegionsController@create') }}">
                                        <i class="{{ trans('modules.icon_create') }}"></i>
                                        {{ trans('modules.create') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in"></i> {{ trans('modules.auth.sign_in') }}</a></li>
                        <li><a href="{{ url('/auth/register') }}"><i class="fa fa-user-plus"></i> {{ trans('modules.auth.sign_up') }}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }} <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/auth/logout') }}"> <i class="fa fa-sign-out"></i> {{ trans('modules.auth.sign_out') }}</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@stop

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
@stop

@section('footer')
    <footer class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="//emmet.com.br" target="blank">
                    <img src="//emmet.com.br/img/logo.png" style="height: 21px;">
                </a>
            </div>
        </div>
    </footer>
@stop

@section('scripts')
    {{-- javascripts --}}
    <script src="{{ asset('/javascripts/administration.js') }}"></script>
@stop
