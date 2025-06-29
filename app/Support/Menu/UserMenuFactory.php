<?php

namespace App\Support\Menu;

class UserMenuFactory extends MenuFactory
{
    public function create(): Menu
    {
        $menu = new Menu();

        $menu->add($this->createMenuItem(
            title: __('profile.my_stories'),
            route: 'profile.index',
            icon: 'book'
        ));

        return $menu;
    }
}
