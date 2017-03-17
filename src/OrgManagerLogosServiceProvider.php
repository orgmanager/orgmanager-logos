<?php

namespace OrgManager\Logos;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class OrgManagerLogosServiceProvider extends ServiceProvider
{
    protected $logo;

    public function __construct(LogoProvider $logo)
    {
        parent::construct();
        $this->logo = $logo;
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('orgmanagerHorizontal', function ($expression) {
            return $this->logo->orgmanagerHorizontal();
        });
        Blade::directive('orgmanagerHorizontalWhite', function ($expression) {
            return $this->logo->orgmanagerHorizontalWhite();
        });
        Blade::directive('orgmanagerIcon', function ($expression) {
            return $this->logo->orgmanagerIcon();
        });
        Blade::directive('orgmanagerIconWhite', function ($expression) {
            return $this->logo->orgmanagerIconWhite();
        });
        Blade::directive('orgmanagerVertical', function ($expression) {
            return $this->logo->orgmanagerVertical();
        });
        Blade::directive('orgmanagerVerticalWhite', function ($expression) {
            return $this->logo->orgmanagerVerticalWhite();
        });
    }
}
