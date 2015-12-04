<?php

namespace Dafiti\Silex;

use Silex\Application;

class DatajetServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldRegister()
    {

        $app = new Application();
        $app->register(new DatajetServiceProvider());
        $this->assertInstanceOf('Dafiti\Datajet\Client', $app['datajet']);
    }
}
