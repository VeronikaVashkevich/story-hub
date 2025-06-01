<?php

namespace App\Services;

use App\Support\Menu\Menu;
use App\Support\Menu\MenuFactoryCreator;

readonly class MenuService
{
    public function __construct(
        private MenuFactoryCreator $factoryCreator
    ) {}

    public function getCurrentMenu(): Menu
    {
        return $this->factoryCreator->getFactory()->create();
    }
}
