<?php

namespace Rabiloo\CodingStandard;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $stubDir = dirname(__DIR__) . '/stub/laravel';
        $this->publishes([
            $stubDir . '/phpcs.xml' => base_path('phpcs.xml.dist'),
            $stubDir . '/pint.json' => base_path('pint.json'),
        ], 'rabiloo-coding-standard');
    }
}
