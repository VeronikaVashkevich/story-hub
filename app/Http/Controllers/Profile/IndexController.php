<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexController extends Controller
{
    /**
     * @return Factory|View|Application|\Illuminate\View\View|object
     */
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
