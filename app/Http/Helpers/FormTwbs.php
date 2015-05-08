<?php

namespace App\Http\Helpers;

class FormTwbs extends \Form
{
    public static $class_div_error = 'has-error';

    public static function input($type, $name, $value = null, $attributes = [])
    {
        return parent::{$type}($name, $value, self::attributes($attributes));
    }

    public static function inputAddon($input, $addon = [])
    {
        $output  = '<div class="input-group">';
        $output .= empty($addon['before']) ? null : '<span class="input-group-addon">' . $addon['before'] . '</span>';
        $output .= $input;
        $output .= empty($addon['after']) ? null : '<span class="input-group-addon">' . $addon['after'] . '</span>';
        $output .= '</div>';

        return $output;
    }

    public static function textBeforeAddon($name, $before, $value = null, $attributes = [])
    {
        return self::inputAddon(self::input('text', $name, $value, $attributes), [ 'before' => $before ]) . self::getError($name);
    }

    public static function passwordBeforeAddon($name, $before, $attributes = [])
    {
        return self::inputAddon( parent::password($name, self::attributes($attributes)), [ 'before' => $before ]) . self::getError($name);
    }

    public static function textAfterAddon($name, $addon, $value = null, $attributes = [])
    {
        $output  = '<div class="input-group">';
        $output .= self::input('text', $name, $value, $attributes);
        $output .= '<span class="input-group-addon">' . $addon . '</span>';
        $output .= '</div>';

        $output .= self::getError($name);

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

    public static function getError($name)
    {
        if (\Session::has('errors')) {
            $errors = \Session::get('errors')->getMessages('default');
            $name = str_replace('[', '.', str_replace(']', '', $name));
            $messages = isset($errors[$name]) ? $errors[$name] : '';

            if (!empty($messages)) {
                return '<small class="help-block">' . (is_array($messages) ? ucfirst(strtolower(current($messages))) : ucfirst(strtolower($message))) . '</small>';
            }
        }
        return null;
    }

    public static function classDivError($name)
    {
        return is_null(self::getError($name)) ? 'form-group' : 'form-group ' . self::$class_div_error;
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
        return self::input('text', $name, $value, $attributes) . self::getError($name);
    }

    public static function textarea($name, $value = null, $attributes = [])
    {
        $attributes['rows'] = isset($attributes['rows']) ? $attributes['rows'] : 2;
        return self::input('textarea', $name, $value, $attributes) . self::getError($name);
    }

    public static function select($name, $options = [], $value = null, $attributes = [])
    {
        $attributes['id'] = isset($attributes['id']) ? $attributes['id'] : $name;

        $output = parent::select($name, $options, $value, self::attributes($attributes));

        $output .= self::getError($name);

        return $output;
    }

    public static function options($options)
    {
        $options = $options + [ '' => trans('general.choice') ];
        ksort($options);
        return $options;
    }
}
