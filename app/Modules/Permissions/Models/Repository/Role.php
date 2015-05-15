<?php

namespace App\Modules\Permissions\Models\Repository;

use App\Models\Repository\Base;

class Role extends Base
{
    /**
     * String $name
     */
    public $gender = 'f';
    public $name = 'roles';

    public function __construct(\App\Modules\Permissions\Models\Role $eloquent)
    {
        $this->eloquent = $eloquent;
    }
}
