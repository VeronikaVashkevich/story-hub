<?php

namespace App\View\Composers;

use App\Services\MenuService;
use Illuminate\View\View;

class MenuComposer
{
    public function __construct(
        protected MenuService $menuService,
    ) {}

    public function compose(View $view): void
    {
        $view->with('currentMenu', $this->menuService->getCurrentMenu());
    }
}
