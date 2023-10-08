<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        Paginator::useBootstrap();
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS','on');
}
}