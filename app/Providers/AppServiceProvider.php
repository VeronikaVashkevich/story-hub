<?php

namespace App\Providers;

use App\Services\MenuService;
use App\Support\Menu\AdminMenuFactory;
use App\Support\Menu\GuestMenuFactory;
use App\Support\Menu\MenuFactoryCreator;
use App\Support\Menu\UserMenuFactory;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AdminMenuFactory::class);
        $this->app->bind(UserMenuFactory::class);
        $this->app->bind(GuestMenuFactory::class);
        $this->app->singleton(MenuFactoryCreator::class);
        $this->app->singleton(MenuService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', MenuComposer::class);
    }
}
