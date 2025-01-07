<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Index');
    }
}
