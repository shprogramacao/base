<?php

namespace AndersonScherdovski\Base\Tests;

use AndersonScherdovski\Base\Facades\Base;
use AndersonScherdovski\Base\ServiceProvider;
use Orchestra\Testbench\TestCase;

class BaseTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'base' => Base::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
