<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
}
