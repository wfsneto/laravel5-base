<?php

namespace App\Models;

class Profile extends Base
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = [ 'name' ];

    protected $hidden = [];
}
