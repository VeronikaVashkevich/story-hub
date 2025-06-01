<?php

namespace App\Support\Menu;

use Illuminate\Support\Facades\Auth;

class MenuFactoryCreator
{
    public function getFactory(): MenuFactory
    {
        if (Auth::check()) {
            return match (true) {
                default => app(UserMenuFactory::class)
            };
        }

        return app(GuestMenuFactory::class);
    }
}
