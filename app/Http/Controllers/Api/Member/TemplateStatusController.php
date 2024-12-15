<?php

namespace App\Http\Controllers\Api\Member;
use App\Http\Controllers\Api\Controller;

class TemplateStatusController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }

        $templateStatuses = $user->templateStatuses;

        return response()->json(['templateStatuses' => $templateStatuses]);
    }
}
