<?php

namespace Ubitcorp\DebugHost;

use Illuminate\Support\ServiceProvider;

class DebugHostServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'debughost');
    
    }

    public function register()
    {
        
    }
}
