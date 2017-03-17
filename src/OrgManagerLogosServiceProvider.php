<?php

namespace OrgManager\Logos;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class OrgManagerLogosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('orgmanagerHorizontal', function ($expression) {
            return $this->orgmanagerHorizontal();
        });
        Blade::directive('orgmanagerHorizontalWhite', function ($expression) {
            return $this->orgmanagerHorizontalWhite();
        });
        Blade::directive('orgmanagerIcon', function ($expression) {
            return $this->orgmanagerIcon();
        });
        Blade::directive('orgmanagerIconWhite', function ($expression) {
            return $this->orgmanagerIconWhite();
        });
        Blade::directive('orgmanagerVertical', function ($expression) {
            return $this->orgmanagerVertical();
        });
        Blade::directive('orgmanagerVerticalWhite', function ($expression) {
            return $this->orgmanagerVerticalWhite();
        });
    }
}
