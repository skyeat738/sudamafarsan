<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Make WhatsApp/phone/email/address available in every view (nav, footer,
        // floating WhatsApp button) without every controller having to pass it.
        View::composer('*', function ($view) {
            if (Schema::hasTable('site_settings')) {
                $view->with('globalSetting', SiteSetting::current());
            }
        });
    }
}
