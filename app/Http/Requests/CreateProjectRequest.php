<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class CreateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    //Thực hiện xử lý dữ liệu trước khi validate
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => $this->input('projectName'),
            'start_date' => Carbon::parse($this->input('deadline.start_date'))->format('Y-m-d'),
            'end_date' => Carbon::parse($this->input('deadline.end_date'))->format('Y-m-d'),
        ]);
        unset($this['projectName']);
        unset($this['deadline']);

    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255|regex:/^[A-Za-z0-9\s]+$/',
            'colorAvatar' => 'required|in:blue,teal,green,red,pink,indigo,yellow,gray',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'description' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:500',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The project name field is required.',
            'name.max' => 'The project name may not be greater than 255 characters.',
            'name.min' => 'The project name must be at least 3 characters.',
            'name.regex' => 'The project name format is invalid.',
            'colorAvatar.required' => 'The color avatar field is required.',
            'colorAvatar.in' => 'The color avatar must be one of the following types: blue, teal, green, red, pink, indigo, yellow, gray.',
            'avatar.image' => 'The avatar must be an image.',
            'avatar.mimes' => 'The avatar must be a file of type: jpeg, png, jpg, gif, svg.',
            'avatar.max' => 'The avatar may not be greater than 5120 kilobytes.',
            'description.max' => 'The description may not be greater than 255 characters.',
            'notes.max' => 'The notes may not be greater than 500 characters.',
            'start_date.required' => 'The start date field is required.',
            'start_date.date' => 'The start date must be a date.',
            'start_date.before_or_equal' => 'The start date must be a date before or equal to end date.',
            'end_date.required' => 'The end date field is required.',
            'end_date.date' => 'The end date must be a date.',
            'end_date.after_or_equal' => 'The end date must be a date after or equal to start date.',
        ];
    }

    //Thực hiện xử lý dữ liệu sau khi validate
    public function passedValidation()
    {
        //Trường hợp nếu không có file avatar thì sẽ lấy màu của avatar
        if (!$this->hasFile('avatar')) {
            $this->merge([
                'avatar' => $this->input('colorAvatar'),
            ]);
        }

        //trường hợp nếu có file avatar thì sẽ lấy file avatar và huỷ trường colorAvatar
        unset($this['colorAvatar']);

    }

}
