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

            @include('admin/shared/navigation')
        </div>
    </nav>
@stop

@section('container')
    <div class="container">
        @include('admin/shared/flash_messages')

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
