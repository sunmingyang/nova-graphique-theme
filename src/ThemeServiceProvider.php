<?php

namespace Yassi\NovaGraphiqueTheme;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('nova.theme', 'default') === 'graphique'){
            Nova::serving(function (ServingNova $event) {
                Nova::style('nova-graphique-theme', __DIR__.'/../resources/css/theme.css');
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
