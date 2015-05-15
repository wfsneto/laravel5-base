<?php

namespace App\Modules\Permissions\Models\Decorator;

trait Role
{
    public function name()
    {
        return $this->name;
    }

    public function slug()
    {
        return $this->slug;
    }

    public function description()
    {
        return $this->description;
    }
}
