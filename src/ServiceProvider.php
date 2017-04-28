<?php

namespace FelipePodesta\Theme;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->bind('view.finder', function($app)
        {
            return new FileViewFinder(
                $app['files'],
                $app['config']['view.paths']
            );
        });

        $this->app->view->setFinder($this->app['view.finder']);
    }
}
