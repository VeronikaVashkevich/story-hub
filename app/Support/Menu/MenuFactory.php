<?php

namespace App\Support\Menu;

use Illuminate\Support\Facades\Route;

abstract class MenuFactory
{
    abstract public function create(): Menu;

    protected function createMenuItem(
        string $title,
        string $route,
        string $icon,
        bool $active = false,
        bool $visible = true,
        array $children = []
    ): MenuItem {
        return new MenuItem(
            title: $title,
            route: $route,
            icon: $icon,
            active: $active || Route::is($route.'*'),
            visible: $visible,
            children: $children
        );
    }
}
