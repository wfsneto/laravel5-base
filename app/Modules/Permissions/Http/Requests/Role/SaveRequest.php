<?php

namespace App\Modules\Permissions\Http\Requests\Role;

use App\Http\Requests\Request;

class SaveRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [ 'required', 'unique:roles,name,' . $this->id() . ',id' ],
            'slug' => [ 'required', 'unique:roles,slug,' . $this->id() . ',id' ],
        ];
    }

    protected function id()
    {
        $id = $this->route('profiles');
        return isset($id) ? $id : 'NULL';
    }
}
