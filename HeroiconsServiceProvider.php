<?php

namespace TWS\Heroicons;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class HeroiconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'heroicons');

        $this->publishes(
            [__DIR__ . '/config/heroicons.php' => config_path('tws/heroicons.php')],
            'heroicons.config',
        );

        $this->publishes(
            [__DIR__ . '/resources/views' => resource_path('views/vendor/tws/heroicons')],
            'heroicons.views',
        );

        if (!config('heroicons.alias'))
        {
            return;
        }

        $this->callAfterResolving(BladeCompiler::class, static function (BladeCompiler $blade): void
        {
            $alias = config('heroicons.alias');
            $blade->component(Icon::class, $alias);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/heroicons.php', 'heroicons');
    }
}
