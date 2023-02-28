<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ProjectInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //điều này là tương đương với $this->authorize('update', $project); trong controller
        // Gate là 1 class trong laravel để kiểm tra xem người dùng có quyền thực hiện hành động nào đó hay không
        // trong trường hợp này là update project hay không
        // nếu có quyền thì sẻ trả về true và ngược lại là false
        // THam số thứ 2 laravel sử dụng Model binding trong để lấy ra model tương ứng với route hiện tại được gọi đến
        return Gate::allows('update', $this->route('project'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'exists:users,email'],
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'The user you are inviting must have a Birdboard account.',
        ];
    }
}
