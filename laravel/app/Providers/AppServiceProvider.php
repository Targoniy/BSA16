<?php

namespace App\Providers;

use App\Lib\Binary\Academy\Smartphone\Smartphone;
use App\Lib\Binary\Academy\Smartphone\Camera;
use App\Lib\Binary\Academy\Smartphone\Battery;
use App\Lib\Binary\Academy\Smartphone\Cores;
use App\Lib\Binary\Academy\Smartphone\CPU;
use App\Lib\Binary\Academy\Smartphone\Display;
use App\Lib\Binary\Academy\Smartphone\Name;



use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Smartphone', function ($app) {
            return new Smartphone(
                new Name('Apple iPhone'), new CPU('Qualcomm 5555'),
                new Display('480*320'), new Camera(8),  
                new Battery(1234), new Cores(2));
        });

    }
}
