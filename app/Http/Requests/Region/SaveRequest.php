<?php

namespace App\Http\Requests\Region;

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
            'code' => [ 'required', 'unique:regions,code,' . $this->current_id() . ',id,deleted_at,NULL' ],
            'name' => [ 'required', 'unique:regions,name,' . $this->current_id() . ',id,deleted_at,NULL' ]
        ];
    }

    protected function current_id()
    {
        $id = $this->route('regions');
        return isset($id) ? $id : 'NULL';
    }

}
