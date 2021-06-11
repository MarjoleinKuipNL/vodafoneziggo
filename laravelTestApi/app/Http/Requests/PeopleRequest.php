<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'hair_color' => 'required|string',
            'homeworld' => 'required',
            'mass' => 'required|integer',
            'gender' => 'required|string',
            'birth_year' => 'required',
            'eye_color' => 'required|string',
            'skin_color' => 'required|string',
            'url' => 'required',
            'height' => 'required|integer'
        ];
    }
}
