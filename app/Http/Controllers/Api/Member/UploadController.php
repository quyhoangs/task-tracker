<?php

namespace App\Http\Controllers\Api\Member;


use App\Http\Controllers\Api\Controller;
use App\Http\Requests\UploadAvatarRequest;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{

    public function uploadAvatarProject(UploadAvatarRequest $request)
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
