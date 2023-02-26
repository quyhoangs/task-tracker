<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    public function update(User $user, $project)
    {
        // Chỉ cho phép chủ sở hữu của dự án hoặc thành viên của dự án thực hiện thao tác
        return $user->is($project->owner) || $project->members->contains($user);
    }
}
