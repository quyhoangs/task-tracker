<?php

namespace App\Http\Controllers;

use App\Models\Secret;

class SecretController extends Controller
{
    public function index()
    {
        return Secret::all();
    }
}
