<?php

namespace App\Http\Controllers\Api\Member;
use App\Http\Controllers\Api\Controller;
use App\Models\Project;
use App\Models\User;
use App\Http\Requests\ProjectInvitationRequest;


class ProjectInvitationsController extends Controller
{
    public function invite(ProjectInvitationRequest $request,Project $project)
    {
        //Bạn cũng có thể gửi mail cho 1 người dùng bất kỳ với cách này
        //Tức là nếu người dùng chưa đăng ký thì ta sẻ gửi mail cho họ để mời họ thaam gia dự án
        // lúc đó họ cần phải đăng ký và xác nhận email mới có thể tham gia dự án
        $user = User::whereEmail($request->email)->first();

        $project->invite($user);

        return redirect($project->path());
    }
}
