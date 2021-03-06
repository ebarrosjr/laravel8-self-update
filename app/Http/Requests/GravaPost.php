<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GravaPost extends FormRequest
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
            'title' => 'required|min:3|max:150|unique:posts',
            'body' => ['required', 'min:5'],
            'image' => 'nullable|image'
        ];
    }
}
