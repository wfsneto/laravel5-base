<?php

namespace App\Models\Repository;

class Base
{
    /**
     * String $myName
     */
    public $myName = 'Record';

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
            $this->message( true, $this->myName . ' successfully created' );
        }
        else {
            $this->message( false, $this->myName . ' can not be created, try again' );
        }

        return $this;
    }

    public function update($id, $attributes)
    {
        $this->eloquent = $this->eloquent->find($id);

        if ($this->eloquent->update($attributes)) {
            $this->message( true, $this->myName . ' successfully updated' );
        }
        else {
            $this->message( false, $this->myName . ' can not be updated, try again' );
        }

        return $this;
    }

    public function destroy($id)
    {
        $this->eloquent = $this->find($id);

        if (empty($this->eloquent)) {
            $this->message(false, $this->myName . ' not found');
        }
        else {
            if ($this->eloquent->delete()) {
                $this->message(true, $this->myName . ' successfully removed');
            }
            else {
                $this->message(false, $this->myName . ' can not be removed, try again');
            }
        }

        return $this;
    }

    public function success()
    {
        return $this->success;
    }

    # protected methods

    protected function message($success, $message = null)
    {
        $this->success = $success;
        $this->message = $message;
    }

    protected function defaultScope()
    {
        return $this->eloquent;
    }
}
