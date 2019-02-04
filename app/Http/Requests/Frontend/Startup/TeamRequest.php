<?php

namespace App\Http\Requests\Frontend\Startup;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'members.*.name' => 'required',
            'members.*.position' => 'required',
            'background' => 'required',
            'employees_count' => 'required|numeric',
            'introduction' => 'required',
            'teamwork' => 'required',
            'description' => 'required',
        ];
    }


}
