<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        @if(Auth::check())
            <li><a href="{{ action('Admin\HomeController@index') }}"> <i class="fa fa-home fa-fw"></i> Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="{{ trans('modules.regions.fa_icon') }}"></i>
                    {{ trans('modules.regions.regions') }}
                    <i class="{{ trans('general.icon_chevron_down') }}"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ action('Admin\RegionsController@index') }}">
                            <i class="{{ trans('general.icon_index') }}"></i>
                            {{ trans('general.see_all.f') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('Admin\RegionsController@create') }}">
                            <i class="{{ trans('general.icon_create') }}"></i>
                            {{ trans('general.create') }}
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in fa-fw"></i> {{ trans('modules.auth.sign_in') }}</a></li>
            <li><a href="{{ url('/auth/register') }}"><i class="fa fa-user-plus fa-fw"></i> {{ trans('modules.auth.sign_up') }}</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="{{ trans('general.icon_chevron_down') }}"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/auth/logout') }}"> <i class="fa fa-sign-out fa-fw"></i> {{ trans('modules.auth.sign_out') }}</a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>
