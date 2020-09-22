<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'link'=>'url|required',
            'price'=>'required|max:10',
            'discount'=>'max:10',
            'category'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|required',
        ];
    }
}
