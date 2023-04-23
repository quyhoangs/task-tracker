<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonInfoRequest extends FormRequest
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
            // 'data' => 'required|array',
            // 'data.*.fieldLabel' => 'required|string',
            // 'data.*.fieldValue' => [
            //     'required',
            //     'string',
            //     function ($attribute, $value, $fail) {
            //         $fieldLabel = $this->input("data.*.fieldLabel");
            //         if ($fieldLabel === 'name' && !preg_match('/^[a-zA-Z\s]+$/', $value)) {
            //             $fail("The $fieldLabel field must only contain letters and spaces.");
            //         } else if ($fieldLabel === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            //             $fail("The $fieldLabel field must be a valid email address.");
            //         }
            //     }
            // ],
        ];
    }

}
