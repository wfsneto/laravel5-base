<?php

namespace App\Modules\Permissions\Models;

use App\Models\Base;

class Role extends Base
{
    use Decorator\Role;

    protected $fillable = [ 'name', 'slug', 'description' ];

    protected $ordenation = [ 'name', 'asc' ];

    public function users()
    {
        return $this->belongsToMany('\App\User');
    }
}
