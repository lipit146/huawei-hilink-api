<?php

namespace Lipit146\HuaweiHilinkApi;

use Illuminate\Support\ServiceProvider;

class HuaweiHilinkApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/huawei.php' => config_path('huawei.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        //
    }
}
