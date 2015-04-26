<?php

namespace App\Http\Helpers;

class Link
{
    public static function link($controller, $action, $params = null, $attributes = [])
    {
        return '<a href="' . action($controller . '@' . $action, $params) . '"' . self::attributes($attributes) . '>' .
            '<i class="' . trans('modules.icon_' . $action) . '"></i> </a>';
    }

    public static function edit($controller, $params, $module = null)
    {
        return self::link(self::controller($controller, $module), 'edit', $params, [ 'class' => 'btn btn-xs btn-info bs-tooltip', 'data-original-title' => trans('modules.edit') ]);
    }

    public static function destroy($controller, $id)
    {
        return '<span class="btn btn-danger btn-xs bs-tooltip" data-original-title="' . trans('modules.destroy') . '" data-toggle="modal" data-target="#' . $controller . '_destroy_' . $id . '" ><i class="' . trans('modules.icon_destroy') . '"></i></span>';
    }

    public static function controller($controller, $module = null)
    {
        return (empty($module) ? $controller : $module . '\\' . $controller) . 'Controller';
    }

    public static function attributes($attributes)
    {
        $attr = null;

        foreach ($attributes as $attribute => $value) {
            $attr .= ' ' . $attribute . '="'. $value . '"';
        }

        return $attr;
    }
}
