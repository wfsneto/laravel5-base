<?php # mount vars
$prefix = isset($module) ? ($module . '::') : 'modules.';
list($controller, $action) = explode('@', Route::getCurrentRoute()->getActionName());
$params = explode('\\', $controller);
$name = snake_case(str_replace('Controller', '', end($params))); ?>

<div class="row">
    <div class="col s12">
        <i class="{{ trans($prefix . $name . '.fa_icon') }}"></i>
        {{ trans($prefix . $name . '.' . $name) }}

        <a class="dropdown-button btn blue" href="#!" data-activates="{{ $action }}-header-actions">
            <i class="{{ trans('general.icon_' . $action) }}"></i>
            {{ trans('general.' . $action) }}
        </a>

        <ul id="{{ $action }}-header-actions" class="dropdown-content">
            @if($action != 'index')
                <li>
                    <a href="{{ action('\\' . $controller . '@index') }}">
                        <i class="fa fa-bars"></i> {{ trans('general.index') }}
                    </a>
                </li>
            @endif
            @if($action != 'create')
                <li>
                    <a href="{{ action('\\' . $controller . '@create') }}">
                        <i class="fa fa-plus"></i> {{ trans('general.create') }}
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
