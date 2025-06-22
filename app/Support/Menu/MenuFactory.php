<?php

namespace App\Support\Menu;

use Illuminate\Support\Facades\Route;

abstract class MenuFactory
{
    abstract public function create(): Menu;

    /**
     * @param string $title
     * @param string $route
     * @param string $icon
     * @param bool $active
     * @param bool $visible
     * @param array<int, MenuItem> $children
     * @return MenuItem
     */
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
            active: $active || Route::is($route . '*'),
            visible: $visible,
            children: $children
        );
    }
}
