<?php

namespace App\Models\Decorator;

trait Region
{
    public function code()
    {
        return $this->code;
    }

    public function name()
    {
        return $this->name;
    }
}
