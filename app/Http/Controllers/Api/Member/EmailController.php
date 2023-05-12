<?php

namespace App\Http\Controllers\Api\Member;

use App\Http\Controllers\Api\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();
        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}
