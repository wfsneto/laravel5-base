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
<nav role="navigation">
  <a class="brand-logo" href="{{ action('HomeController@index') }}">
    {{ env('APP_NAME') }}
  </a>

  <div class="nav-wrapper container">
    @if(Auth::check())
      <ul class="left hide-on-med-and-down">
        @include('admin/shared/navigation')
      </ul>
    @endif

    <ul class="right hide-on-med-and-down">
      @if (Auth::guest())
        <li><a href="{{ url('/auth/login') }}"><span class="fa fa-sign-in fa-fw"></span> {{ trans('modules.auth.sign_in') }}</a></li>
        <li><a href="{{ url('/auth/register') }}"><span class="fa fa-user-plus fa-fw"></span> {{ trans('modules.auth.sign_up') }}</a></li>
      @else
        <li>
          <a href="{{ url('/auth/logout') }}">
            <span class="fa fa-sign-out fa-fw"></span>
            {{ trans('modules.auth.sign_out') }}
          </a>
        </li>
      @endif
    </ul>

    <a href="#" data-activates="mobile-menu" class="button-collapse">
      <i class="mdi-navigation-menu"></i>
    </a>
    <ul class="side-nav" id="mobile-menu">
      @include('admin/shared/navigation')
      <li class="divider"></li>
      <li>
        <a href="{{ url('/auth/logout') }}">
          <span class="fa fa-sign-out fa-fw"></span>
          {{ trans('modules.auth.sign_out') }}
        </a>
      </li>
    </ul>
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
    <div class="col-md-12 right">
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
