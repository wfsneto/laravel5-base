<?php

namespace App\Http\Helpers;

class FormTwbs extends \Form
{
    public static $class_div_error = 'has-error';

    public static function input($type, $name, $value = null, $attributes = [])
    {
        $output = parent::{$type}($name, $value, self::attributes($attributes));

        $output .= self::get_error($name);

        return $output;
    }

    public static function label($name, $value = null, $attributes = [])
    {
        $attributes['class'] = isset($attributes['class']) ? 'control-label ' . $attributes['class'] : 'control-label';

        return parent::label($name, $value, $attributes);
    }

    public static function attributes($attributes)
    {
        $attributes['class'] = isset($attributes['class']) ? 'form-control ' . $attributes['class'] : 'form-control';
        return $attributes;
    }

    public static function get_error($name)
    {
        if (\Session::has('errors')) {
            $errors = \Session::get('errors')->getMessages('default');
            $messages = isset($errors[$name]) ? $errors[$name] : '';

            if (!empty($messages)) {
                return '<span class="help-block">' . (is_array($messages) ? implode('<br />', $messages) : $messages) . '</span>';
            }
        }
        return null;
    }

    public static function class_div_error($name)
    {
        return is_null(self::get_error($name)) ? 'form-group' : 'form-group ' . self::$class_div_error;
    }

    public static function submit($module, $attributes = [])
    {
        $label = trans('form.button_save', [ 'name' => strtolower(trans('modules.' . $module . '.' . str_singular($module))) ]);

        $attributes['class'] = isset($attributes['class']) ? 'btn btn-primary ' . $attributes['class'] : 'btn btn-primary';

        return parent::submit($label, $attributes);
    }

    # Aliases

    public static function text($name, $value = null, $attributes = [])
    {
        return self::input('text', $name, $value, $attributes);
    }

    public static function textarea($name, $value = null, $attributes = [])
    {
        return self::input('textarea', $name, $value, $attributes);
    }

    public static function select($column, $options = [], $value = null, $attributes = [])
    {
        $output = parent::select($name, $options, $value, self::attributes($attributes));

        $output .= self::get_error($name);

        return $output;
    }

    public static function options($options)
    {
        $options = $options + [ '' => trans('general.choice') ];
        ksort($options);
        return $options;
    }
}
