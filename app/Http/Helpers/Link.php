<?php

namespace App\Http\Helpers;

class Link
{
    public static function link($controller, $action, $icon, $params = null, $class = null)
    {
        return '<a href="' . action($controller . '@' . $action, $params) . '" class="' . $class . '">
                    <i class="' . $icon . '"></i>
                </a>';
    }

    public static function edit($controller, $params, $module = null)
    {
        return self::link(self::controller($controller, $module), 'edit', 'fa fa-edit', $params, 'btn btn-xs btn-warning');
    }

    public static function destroy($controller, $id)
    {
        return '<span class="btn btn-danger btn-xs tooltips" data-original-title="Remover"  data-toggle="modal" data-target="#' . $controller . '_destroy_' . $id . '" ><i class="fa fa-trash-o"></i></span>';
    }

    public static function controller($controller, $module = null)
    {
        return (empty($module) ? $controller : $module . '\\' . $controller) . 'Controller';
    }
}
