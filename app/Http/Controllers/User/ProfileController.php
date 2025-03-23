<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        $stories = auth()->user()
            ->stories()
            ->with('characters')
            ->with('tags')
            ->get();

        return Inertia::render('Profile/Index', compact('stories'));
    }
}
