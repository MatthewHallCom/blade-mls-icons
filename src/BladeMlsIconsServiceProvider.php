<?php

declare(strict_types=1);

namespace MatthewHallCom\BladeMlsIcons;

use MatthewHallCom\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeMlsIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-mls-icons', []);

            $factory->add('mls-icons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-mls-icons.php', 'blade-mls-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-mls-icons'),
            ], 'blade-mls-icons');

            $this->publishes([
                __DIR__ . '/../config/blade-mls-icons.php' => $this->app->configPath('blade-mls-icons.php'),
            ], 'blade-mls-icons-config');
        }
    }
}
