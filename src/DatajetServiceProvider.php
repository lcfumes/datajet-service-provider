<?php

namespace Dafiti\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class DatajetServiceProvider implements ServiceProviderInterface
{
    private $prefix = 'datajet';

    public function register(Application $app)
    {
        $paramKey = sprintf('%s.config', $this->prefix);

        if (!isset($app[$paramKey])) {
            $app[$paramKey] = [];
        }

        $app[$this->prefix] = $app->share(
            function () use ($app) {
                return \Dafiti\Datajet\Client::create($app[$this->prefix.'.config']);
            }
        );
    }

    public function boot(Application $app)
    {
    }
}
