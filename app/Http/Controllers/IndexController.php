<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexController extends Controller
{
    /**
     * @return Factory|View|Application|\Illuminate\View\View|object
     */
    public function __invoke()
    {
        $stories = Story::query()
            ->with([
                'user',
                'fandom',
                'characters',
                'tags',
            ])
            ->paginate(10);

        return view('index', compact('stories'));
    }
}
