<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitizen extends FormRequest
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
            'name'   => 'bail|required|min:5|max:100',
            'gender' => 'required|min:4|max:100',
            'address'   => 'bail|required|min:5|max:100',
            'phone'   => 'bail|required|min:5|max:100',
            'wards_id'   => 'bail|required'
        ];
    }
}
