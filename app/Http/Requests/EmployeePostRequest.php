<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeePostRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',

            'company' => 'required',
            'phone' => 'nullable|numeric',

            'email' => [
                'nullable',

                'email',
                Rule::unique('employees', 'email')->ignore($this->employee),
            ],
            'logo' => 'mimes:jpeg,jpg,png,gif|dimensions:min_width=100,min_height=100' // max 10000kb
        ];
    }
}
