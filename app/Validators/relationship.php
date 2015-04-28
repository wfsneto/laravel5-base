<?php

# has_children
$validator->extendImplicit('has_children', function ($attribute, $value, $parameters)
{
    $eloquent = 'App\Models\\' . array_shift($parameters);

    $resource = $eloquent::find($attribute);

    foreach ($parameters as $key => $child) {
        if ($resource->$child()->exists()) {
            return false;
        }
    };

    return true;
});
