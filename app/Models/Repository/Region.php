<?php

namespace App\Models\Repository;

class Region extends Base
{
    /**
     * String $name
     */
    public $gender = 'f';
    public $name = 'regions';

    public function __construct(\App\Models\Region $eloquent)
    {
        $this->eloquent = $eloquent;
    }
}
