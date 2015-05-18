{{-- <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        @if(Auth::check())
            <li><a href="{{ action('Admin\HomeController@index') }}"> <span class="fa fa-home fa-fw"></span> Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <span class="{{ trans('modules.regions.fa_icon') }}"></span>
                    {{ trans('modules.regions.regions') }}
                    <span class="{{ trans('general.icon_chevron_down') }}"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ action('Admin\RegionsController@index') }}">
                            <span class="{{ trans('general.icon_index') }}"></span>
                            {{ trans('general.see_all.f') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('Admin\RegionsController@create') }}">
                            <span class="{{ trans('general.icon_create') }}"></span>
                            {{ trans('general.create') }}
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}"><span class="fa fa-sign-in fa-fw"></span> {{ trans('modules.auth.sign_in') }}</a></li>
            <li><a href="{{ url('/auth/register') }}"><span class="fa fa-user-plus fa-fw"></span> {{ trans('modules.auth.sign_up') }}</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <span class="fa fa-user fa-fw"></span> {{ Auth::user()->name }} <span class="{{ trans('general.icon_chevron_down') }}"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/auth/logout') }}"> <span class="fa fa-sign-out fa-fw"></span> {{ trans('modules.auth.sign_out') }}</a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div> --}}

{{-- <a class="dropdown-button btn" href="#" data-activates="dropdown-regions">
    <span class="{{ trans('modules.regions.fa_icon') }}"></span>
    {{ trans('modules.regions.regions') }}
    <span class="{{ trans('general.icon_chevron_down') }}"></span>
</a>

<ul id="dropdown-regions" class="dropdown-content">
    <li>
        <a href="{{ action('Admin\RegionsController@index') }}">
            <em class="{{ trans('general.icon_index') }}"></em>
            {{ trans('general.see_all.f') }}
        </a>
    </li>
    <li>
        <a href="{{ action('Admin\RegionsController@create') }}">
            <span class="{{ trans('general.icon_create') }}"></span>
            {{ trans('general.create') }}
        </a>
    </li>
</ul> --}}

<nav>
    <div class="nav-wrapper container">
        @if(Auth::check())
            <ul class="left hide-on-med-and-down">
                <li>
                    <a href="{{ action('Admin\RegionsController@index') }}">
                        <span class="{{ trans('modules.regions.fa_icon') }}"></span>
                        {{ trans('modules.regions.regions') }}
                    </a>
                </li>
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

        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="components.html">Components</a></li>
            <li><a href="javascript.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </div>
</nav>


