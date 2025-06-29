<?php

namespace App\Support\Menu;

class GuestMenuFactory extends MenuFactory
{
    public function create(): Menu
    {
        $menu = new Menu();

        $menu->add($this->createMenuItem(
            title: 'Истории',
            route: 'index',
            icon: 'book'
        ));

        return $menu;
    }
}
