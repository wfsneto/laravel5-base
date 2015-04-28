<?php

namespace App\Models;

class State extends Base
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
