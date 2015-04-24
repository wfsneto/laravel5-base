<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $searchable = [];

    protected $ordenation = [];

    public function scopeSearch($query, $term = null)
    {
        $term = empty($term) ? \Input::get('term') : $term;

        if (!empty($term)) {
            $query->where( function ($query) use ($term) {
                foreach ($this->searchable as $key => $column) {
                    $query->orWhere( $column, 'like', "%{$term}%" );
                }
            });
        }

        return $query;
    }

    public function scopeOrdenation($query, $column = null, $type = null)
    {
        $column = empty($column) ? \Input::get('sort_by') : $column;
        $type = empty($type) ? \Input::get('order_by') : $type;

        if (!empty($column) && !empty($type)) {
            $query->orderBy($column, $type);
        }
        else {
            if (isset($this->ordenation[0]) && isset($this->ordenation[1])) {
                $query->orderBy($this->ordenation[0], $this->ordenation[1]);
            }
            else {
                $query->latest();
            }
        }

        return $query;
    }
}
