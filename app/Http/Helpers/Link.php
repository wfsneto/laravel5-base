<?php

namespace App\Http\Helpers;

class Link
{
    public static function link($controller, $action, $label, $params = null, $attributes = [])
    {
        return '<a href="' . action($controller . '@' . $action, $params) . '"' . self::attributes($attributes) . '>' . $label . '</a>';
    }

    public static function link_icon($controller, $action, $params = null, $attributes = [])
    {
        return self::link($controller, $action, '<i class="' . trans('general.icon_' . $action) . '"></i>', $params, $attributes);
    }

    public static function click_to_create($controller, $module = null)
    {
        return trans('general.click_to_create', [ 'link' => self::link(self::controller($controller, $module), 'create', trans('general.here')) ]);
    }

    public static function edit($controller, $params, $module = null)
    {
        return self::link_icon(self::controller($controller, $module), 'edit', $params, [ 'class' => 'btn btn-xs btn-info bs-tooltip', 'data-original-title' => trans('general.edit') ]);
    }

    public static function destroy($controller, $id)
    {
        // return '<span class="btn btn-danger btn-xs bs-tooltip" data-original-title="' . trans('general.destroy') . '" data-toggle="modal" data-target="#' . str_plural($controller) . '_destroy_' . $id . '" ><i class="' . trans('general.icon_destroy') . '"></i></span>';
        return '<a class="modal-trigger waves-effect waves-light btn" href="#' . str_plural($controller) . '_destroy_' . $id . '"><i class="' . trans('general.icon_destroy') . '"></i></a>';
    }

    public static function controller($controller, $module = null)
    {
        return (empty($module) ? ucfirst(str_plural($controller)) : $module . '\\' . ucfirst(str_plural($controller))) . 'Controller';
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
