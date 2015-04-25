<?php # mount vars
$route = explode('@', Route::getCurrentRoute()->getActionName());
$controller = str_replace('App\Http\Controllers\\', '', $route[0]);
$name = snake_case(str_replace('Admin\\', '', str_replace('Controller', '', $controller)));
$action = $route[1]; ?>

<div class="panel-heading">

<div class="row">
    <div class="col-md-8">
        <i class="{{ trans('modules.' . $name . '.fa_icon') }}"></i>
        {{ trans('modules.' . $name . '.' . $name) }}
    </div>
    <div class="col-md-4 text-right">
        {{-- Split button --}}
        <div class="btn-group">
            <span class="btn btn-xs btn-default">
                <i class="{{ trans('modules.icon_' . $action) }}"></i>
                {{ trans('modules.' . $action) }}
            </span>
            <span class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-chevron-down"></i>
                <span class="sr-only"></span>
            </span>
            <ul id="actions-menu" class="dropdown-menu" role="menu">
                @if($action != 'index')
                    <li>
                        <a href="{{ action('Admin\RegionsController@index') }}">
                            <i class="fa fa-bars"></i> {{ trans('modules.index') }}
                        </a>
                    </li>
                @endif
                @if($action != 'create')
                    <li>
                        <a href="{{ action('Admin\RegionsController@create') }}">
                            <i class="fa fa-plus"></i> {{ trans('modules.create') }}
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

</div>
