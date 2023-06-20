<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //step 1
            'name' => 'required|max:50|min:3',
            'background_color' => 'required|in:red,yellow,green,blue,indigo,purple,pink,gray,teal,cyan,white,black',
            'avatar' => 'required|image|mimes:jpeg,png|max:8192',
        ];
    }

    public function messages()
    {
        return [
            //step 1
            'name.required' => 'Please enter a project name.',
            'name.max' => 'The project name must not exceed 50 characters.',
            'name.min' => 'The project name must be at least 3 characters.',
            'background_color.required' => 'Please select a background color.',
            'background_color.in' => 'The selected background color is invalid.',
            'avatar.required' => 'Please upload an image.',
            'avatar.image' => 'The uploaded file must be an image.',
            'avatar.mimes' => 'The image must be in JPEG or PNG format.',
            'avatar.max' => 'The image size must not exceed 8MB.',
        ];
    }
}
