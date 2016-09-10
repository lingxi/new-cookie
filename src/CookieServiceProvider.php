<?php

namespace Lingxi\Cookie;

use Illuminate\Support\ServiceProvider;

class CookieServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cookie', function ($app) {
            $config = $app['config']['session'];

            return (new CookieJar)->setDefaultPathAndDomain($config['path'], $config['domain'], $config['secure']);
        });
    }
}
