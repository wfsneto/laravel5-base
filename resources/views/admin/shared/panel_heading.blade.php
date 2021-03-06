<?php # mount vars
$route = explode('@', Route::getCurrentRoute()->getActionName());
$controller = str_replace('App\Http\Controllers\\', '', $route[0]);
$name = snake_case(str_replace('Admin\\', '', str_replace('Controller', '', $controller)));
$action = $route[1]; ?>

<div class="panel-heading">

<div class="row">
    <div class="col-md-12">
        <i class="{{ trans('modules.' . $name . '.fa_icon') }}"></i>
        {{ trans('modules.' . $name . '.' . $name) }}

        {{-- Split button --}}
        <div class="btn-group">
            <span class="btn btn-xs btn-default">
                <i class="{{ trans('general.icon_' . $action) }}"></i>
                {{ trans('general.' . $action) }}
            </span>
            <span class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="{{ trans('general.icon_chevron_down') }}"></i>
                <span class="sr-only"></span>
            </span>
            <ul id="actions-menu" class="dropdown-menu" role="menu">
                @if($action != 'index')
                    <li>
                        <a href="{{ action($controller . '@index') }}">
                            <i class="fa fa-bars"></i> {{ trans('general.index') }}
                        </a>
                    </li>
                @endif
                @if($action != 'create')
                    <li>
                        <a href="{{ action($controller . '@create') }}">
                            <i class="fa fa-plus"></i> {{ trans('general.create') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

</div>
