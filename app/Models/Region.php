<?php

namespace App\Models;

class Region extends Base
{
    use \Illuminate\Database\Eloquent\SoftDeletes, Decorator\Region;

    protected $fillable = [ 'code', 'name' ];

    protected $ordenation = [ 'name', 'asc' ];
}
