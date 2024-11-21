<?php

namespace Lipit146\HuaweiHilinkApi;

use Illuminate\Support\ServiceProvider;

class HuaweiHilinkApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->publishes([
        //     __DIR__ . '/config/huawei.php' => config_path('huawei.php'),
        // ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->setupAssets();
    }

    /**
     * Setup package assets.
     *
     * @return void
     */
    protected function setupAssets()
    {
        $this->mergeConfigFrom($config = __DIR__ . '/config/huawei.php', 'huawei');

        if ($this->app->runningInConsole()) {
            $this->publishes([$config => config_path('huawei.php')], 'huawei');
        }
    }
}
