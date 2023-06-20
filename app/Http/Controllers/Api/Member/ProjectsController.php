<?php

namespace App\Http\Controllers\Api\Member;
use App\Http\Controllers\Api\Controller;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\UploadAvatarRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->accessibleProjects();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function stepsCreateProject(CreateProjectRequest $request)
    {
        DB::beginTransaction();
        try {
            // Bước 1: Upload Avatar và Project Name
             $this->__uploadAvatarProject($request);

            // Bước 2: ProjectInfo
            $this->__addProjectInfo($request);

            // Bước 3: Custom Status
            $this->__selectProjectStatus($request);

            // Bước 4: Invite Members
            $this->__inviteMembersToProject($request);

            DB::commit();

            // Phản hồi với thông báo thành công
            return response()->json(['message' => 'Dự án đã được tạo thành công'], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            // Phản hồi với thông báo lỗi
            return response()->json(['message' => 'Đã xảy ra lỗi khi tạo dự án'], 500);
        }

        // $project = auth()->user()->projects()->create($this->validateRequest());

        // if ($tasks = request('tasks')) {
        //     $project->addTasks($tasks);
        // }

        // if (request()->wantsJson()) {
        //     return ['message' => $project->path()];
        // }

        // return redirect($project->path());
    }

    public function update(UpdateProjectRequest $request,Project $project){

        $project->update($request->validated());

        return redirect($project->path());
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    public function destroy(Project $project)
    {
        $this->authorize('manage', $project);

        $project->delete();

        return redirect('/projects');
    }

    /**
     * Validate the request attributes.
     *
     * @return array
     */
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'notes' => 'nullable'
        ]);
    }

    //__uploadAvatar
    private function __uploadAvatarProject($request)
    {
        // key 'avatar' được set dưới vue js : formData.append('avatar', file);
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');

            // // Thay đổi kích thước ảnh và lưu vào thư mục public/images
            // $resizedImage = Image::make($image)->resize(800, 600);
            // $resizedImage->save(storage_path('app/project/avatar/' . $image->hashName()));

            // // Cắt ảnh và áp dụng bộ lọc xám trước khi lưu vào thư mục public/images
            // $croppedImage = Image::make($image)->crop(300, 300)->greyscale();
            // $croppedImage->save(storage_path('app/project/avatar/cropped_' . $image->hashName()));

            // Nén ảnh với chất lượng tùy chỉnh và lưu vào thư mục public/images
            // Chất lượng ảnh nén sẽ nằm trong khoảng từ 0 - 100 (Hiện tại là 80)
            $compressedImage = Image::make($image)->encode('jpg', 80);
            $compressedImage->save(storage_path('app/public/avatars/compressed_' . $image->hashName()));

            // Bạn cũng có thể lưu ảnh vào cơ sở dữ liệu hoặc thực hiện các hành động khác

            return response()->json([
                'message' => 'Image uploaded successfully.',
                'path' => '/storage/avatars/compressed_' . $image->hashName(),
            ]);
        }

        return response()->json(['error' => 'Please choose an image before uploading.']);

    }
}
