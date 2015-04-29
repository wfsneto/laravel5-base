<?php

namespace App\Models\Finder;

trait Base
{
    public function init($attributes = [])
    {
        $name = get_class($this->eloquent);
        $resource = new $name;
        foreach ($attributes as $attribute => $value) {
            if (in_array($attribute, $resource->getFillable())) {
                $resource->$attribute = $value;
            }
        }
        return $resource;
    }

    public function all()
    {
        return $this->defaultScope()->search()->ordenation()->paginate($this->perpage);
    }

    public function find($id)
    {
        return $this->defaultScope()->find($id);
    }

    public function lists($column, $id = null)
    {
        return $this->defaultScope()->lists($column, $id);
    }

    public function group_lists($relation, $column, $id = null)
    {
        $lists = [];
        $relation = explode('.', $relation);

        $collection = $this->all();
        foreach ($collection as $key => $resource) {
            $lists[ $resource->{$relation[0]}->{$relation[1]} ][ $resource->{$id} ] = $resource->{$column};
        }

        return $lists;
    }

    protected function defaultScope()
    {
        return $this->eloquent;
    }
}
