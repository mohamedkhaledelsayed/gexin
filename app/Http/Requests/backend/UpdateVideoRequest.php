<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoRequest extends FormRequest
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
            'title'=>'required|max:255',
            'link'=>'required|url',
            'homeimage' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
