<?php

namespace App\Models\Repository;

class Base
{
    use \App\Models\Decorator\Base;
    /**
     * String $name
     */
    public $gender = 'm';
    public $name = 'records';

    /**
     * Integer $perpage
     */
    public $perpage = 30;

    /**
     * String $message
     */
    public $message = null;

    /**
     * Boolean $success
     */
    private $success = false;

    public function __construct(\Eloquent $eloquent)
    {
        $this->eloquent = $eloquent;
    }

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

    public function store($attributes)
    {
        $this->eloquent->fill($attributes);

        if ($this->eloquent->save()) {
            $this->message(true, 'created');
        }
        else {
            $this->message(false, 'try_again');
        }

        return $this;
    }

    public function update($id, $attributes)
    {
        $this->eloquent = $this->eloquent->find($id);

        if ($this->eloquent->update($attributes)) {
            $this->message(true, 'updated');
        }
        else {
            $this->message(false, 'try_again');
        }

        return $this;
    }

    public function destroy($id)
    {
        $this->eloquent = $this->find($id);

        if (empty($this->eloquent)) {
            $this->message(false, 'not_found');
        }
        else {
            if ($this->eloquent->delete()) {
                $this->message(true, 'removed');
            }
            else {
                $this->message(false, 'try_again');
            }
        }

        return $this;
    }

    public function success()
    {
        return $this->success;
    }

    protected function defaultScope()
    {
        return $this->eloquent;
    }
}
