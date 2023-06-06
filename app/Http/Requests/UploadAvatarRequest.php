<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadAvatarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'avatar' => 'required|image|mimes:jpeg,png|max:8192',
        ];
    }

    public function messages()
    {
        return [
            'avatar.required' => 'Please upload an image.',
            'avatar.image' => 'The uploaded file must be an image.',
            'avatar.mimes' => 'The image must be in JPEG or PNG format.',
            'avatar.max' => 'The image size must not exceed 8MB.',
        ];
    }
}
