<?php

namespace Dafiti\Silex;

use Silex\Application;

class DataJetServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldRegister()
    {

        $app = new Application();
        $app->register(new DataJetServiceProvider());
        $this->assertInstanceOf('Dafiti\Datajet\Client', $app['datajet']);
    }
}
