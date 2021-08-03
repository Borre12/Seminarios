<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

   
    public function boot()
    {
        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)):?>";
        });
    }
}
