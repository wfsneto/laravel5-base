<?php

namespace App\Http\Helpers;

class FormTwbs
{
    public static $class_div_error = 'has-error';

    public static function input($type, $module, $column, $value = null, $attributes = [])
    {
        return self::open_div($column) .
            \Form::label($column, self::label($module, $column), [ 'class' => 'control-label' ]) .
            \Form::{$type}($column, $value, self::attributes($module, $column, $attributes)) .
            self::get_error($column) .
            self::close_div();
    }

    public static function open_div($column)
    {
        $class_div_error = is_null(self::get_error($column)) ? null : ' ' . self::$class_div_error;

        return '<div class="form-group' . $class_div_error . '">';
    }

    public static function close_div()
    {
        return '</div>';
    }

    public static function get_error($column)
    {
        if (\Session::has('errors')) {
            $errors = \Session::get('errors')->getMessages('default');
            $messages = isset($errors[$column]) ? $errors[$column] : '';

            if (!empty($messages)) {
                return '<span class="help-block">' . (is_array($messages) ? implode('<br />', $messages) : $messages) . '</span>';
            }
        }
        return null;
    }

    public static function submit($module, $attributes = [])
    {
        $label = trans('form.button_save', [ 'name' => strtolower(trans('modules.' . $module . '.' . str_singular($module))) ]);

        $attributes['class'] = isset($attributes['class']) ? 'btn btn-primary ' . $attributes['class'] : 'btn btn-primary';

        return \Form::submit($label, $attributes);
    }

    # Aliases

    public static function text($module, $column, $value = null, $attributes = [])
    {
        return self::input('text', $module, $column, $value, $attributes = []);
    }

    public static function textarea($module, $column, $value = null, $attributes = [])
    {
        return self::input('textarea', $module, $column, $value, $attributes = []);
    }

    public static function select($module, $column, $options = [], $value = null, $attributes = [])
    {
        return self::open_div($column) .
            \Form::label($column, self::label($module, $column), [ 'class' => 'control-label' ]) .
            \Form::select($column, self::options($options), $value, self::attributes($module, $column, $attributes)) .
            self::get_error($column) .
            self::close_div();
    }

    # Getters

    public static function attributes($module, $column, $attributes)
    {
        $attributes['class'] = isset($attributes['class']) ? 'form-control ' . $attributes['class'] : 'form-control';
        $attributes += [ 'placeholder' => self::label($module, $column) ];

        return $attributes;
    }

    public static function options($options)
    {
        $options = $options + [ '' => trans('general.choice') ];
        ksort($options);
        return $options;
    }

    public static function label($module, $column)
    {
        return trans('modules.' . $module . '.' . $column);
    }
}
