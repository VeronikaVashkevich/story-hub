<?php

namespace App\Support\Menu;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class MenuFactoryCreator
{
    public function getFactory(): MenuFactory
    {
        if (Route::is('index')) {
            return app(GuestMenuFactory::class);
        }

        if (Route::is('dashboard*')) {
            return app(AdminMenuFactory::class);
        }

        return Auth::check() ? app(UserMenuFactory::class) : app(GuestMenuFactory::class);
    }
}
