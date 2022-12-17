<?php

namespace Alagakin\Tellog;

use Illuminate\Support\ServiceProvider;

class TellogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tellog.php' => config_path('tellog.php')
        ]);
    }

    public function register()
    {

    }
}