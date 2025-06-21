<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $stories = auth()
            ->user()
            ->stories()
            ->with([
                'user',
                'fandom',
                'characters',
                'tags',
            ])
            ->paginate(10);

        return view('profile.index', compact('stories'));
    }
}
