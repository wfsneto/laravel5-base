<?php

namespace App\Modules\Permissions\Http\Requests\Role;

use App\Http\Requests\Request;

class DestroyRequest extends Request
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
            $this->route('roles') => [ 'has_children:\App\Modules\Permissions\Models\Role,users' ]
        ];
    }
}
