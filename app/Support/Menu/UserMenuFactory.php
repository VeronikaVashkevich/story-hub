<?php

namespace App\Support\Menu;

class UserMenuFactory extends MenuFactory
{
    public function create(): Menu
    {
        $menu = new Menu;

        //        $menu->add($this->createMenuItem(
        //            title: 'Мои истории',
        //            route: 'profile.stories.index',
        //            icon: ''
        //        ));

        return $menu;
    }
}
