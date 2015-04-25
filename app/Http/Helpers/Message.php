<?php

namespace App\Http\Helpers;

class Message
{
    public static function show($name, $type, $gender = 'm')
    {
        $trans = trans('messages.' . $type);

        if (is_string($trans)) {
            return $trans;
        }
        else {
            $gender = '.' . (in_array($gender, [ 'f', 'm' ]) ? $gender : 'm');

            return trans('modules.' . $name . '.' . str_singular($name)) . trans('messages.' . $type . $gender);
        }
    }

    public static function success($name, $gender = 'm')
    {
        return self::show($name, 'success', $gender);
    }

    public static function created($name, $gender = 'm')
    {
        return self::show($name, 'created', $gender);
    }

    public static function updated($name, $gender = 'm')
    {
        return self::show($name, 'updated', $gender);
    }

    public static function removed($name, $gender = 'm')
    {
        return self::show($name, 'removed', $gender);
    }

    public static function try_again($name, $gender = 'm')
    {
        return self::show($name, 'try_again', $gender);
    }

    public static function not_found($name, $gender = 'm')
    {
        return self::show($name, 'not_found', $gender);
    }
}
