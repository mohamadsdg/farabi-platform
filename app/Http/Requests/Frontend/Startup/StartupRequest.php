<?php

namespace App\Http\Requests\Frontend\Startup;

use Illuminate\Foundation\Http\FormRequest;

class StartupRequest extends FormRequest
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
            'name' => 'required',
            'start_date' => 'required',
            'introduction' => 'required',
            'domains' => 'required',
            'props' => 'required',
            'type' => 'required',
            'stage' => 'required',
            'is_mvp_ready' => 'required',
            'working' => 'required',
            'similar_startup' => 'required',
            'is_idea_submitted' => 'required',
        ];
    }


}
