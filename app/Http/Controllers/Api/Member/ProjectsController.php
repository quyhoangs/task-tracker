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
        // $project = auth()->user()->projects()->create($this->validateRequest());
        // Bước 1: Upload Avatar và Project Name
        //Trường hợp k có avatar thì sẽ lấy ColorAvatar mặc định
        // key 'avatar' được set dưới vue js : formData.append('avatar', file);

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
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

            $project = auth()->user()->projects()->updateOrCreate([
                    'id' => $request->input('id'),// Nếu có id thì sẽ update, không có hoặc null thì sẽ tạo mới
                ],$request->all()
            );

            DB::commit();

            return response()->json([
                'message' => 'Project created sucsess',
                'data' => $project
        ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'An error occurred while creating the project',
            'error' => $e->getMessage()
        ], 500);
        }


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
            //sometimes: Title chỉ cần được kiểm tra nếu nó tồn tại trong dữ liệu đầu vào.
            // Nếu trường title tồn tại, nó phải được cung cấp (không được trống).
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'notes' => 'nullable'
        ]);
    }

}
