<?php

namespace App\Http\Helpers;

class FormTwbs
{
    public static function input($type, $module, $column, $value = null, $attributes = [])
    {
        return \Form::label($column, self::label($module, $column)) .
            \Form::{$type}($column, $value, self::attributes($module, $column, $attributes));
    }

    public static function submit($module, $attributes = [])
    {
        $label = trans('modules.button_save', [ 'name' => strtolower(trans('modules.' . $module . '.' . str_singular($module))) ]);

        $attributes['class'] = isset($attributes['class']) ? 'btn btn-primary ' . $attributes['class'] : 'btn btn-primary';

        return \Form::submit($label, $attributes);
    }

    # Aliases

    public static function text($module, $column, $value = null, $attributes = [])
    {
        return self::input('text', $module, $column, $value = null, $attributes = []);
    }

    public static function textarea($module, $column, $value = null, $attributes = [])
    {
        return self::input('textarea', $module, $column, $value = null, $attributes = []);
    }

    # Getters

    public static function attributes($module, $column, $attributes)
    {
        $attributes['class'] = isset($attributes['class']) ? 'form-control ' . $attributes['class'] : 'form-control';
        $attributes += [ 'placeholder' => self::label($module, $column) ];

        return $attributes;
    }

    public static function label($module, $column)
    {
        return trans('modules.' . $module . '.' . $column);
    }
}
