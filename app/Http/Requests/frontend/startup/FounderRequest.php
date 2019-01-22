<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FounderRequest extends FormRequest
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
            'grade_id' => 'required',
            'university_id' => 'required',
            'major' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'skills.*' => 'required',
            'achievement' => 'required'
        ];
    }
}
