<?php

namespace App\Support\Menu;

class AdminMenuFactory extends MenuFactory
{
    public function create(): Menu
    {
        $menu = new Menu;

        //        $menu->add($this->createMenuItem(
        //            title: 'Пользователи',
        //            route: 'admin.users.index',
        //            icon: ''
        //        ));

        return $menu;
    }
}
