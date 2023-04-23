<?php

namespace App\Http\Controllers\Api\Member;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\UpdatePersonInfoRequest;
use Illuminate\Http\Request;

class PersonInfoController extends Controller
{
    public function updatePersonalInfo(UpdatePersonInfoRequest $request)
    {
        $data =  $request->all();
        $user = $request->user();

        $result = [];
        foreach ($request->all() as $item) {
            $result[$item['fieldLabel']] = $item['fieldValue'];
        }

        $user->fill($result)->save();  //same $user->fill([ 'name' => 'John Doe' ])->save();

        return response()->json([
            'message' => 'Personal information has been updated successfully.',
                //Trả về dữ liệu đã được cập nhật để vue js có thể cập nhật trên giao diện
            'fieldLabel' => $data['data']['fieldLabel'],
            'fieldValue' => $data['data']['fieldValue']
        ]);
    }

    public function show(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'user' => $user,
        ]);
    }

}
