<?php

/*
 * This file is part of the Generito package.
 *
 * 
 * (c) Sobit Akhmedov <sobit.akhmedov@gmail.com>, Oleksandr Knyga <oleksandrknyga@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DotConfig\Test;

use DotConfig\Config;

/**
 * Class ConfigTest
 *
 * @package DotConfig\Config
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Config
     */
    private $config;

    protected function setUp()
    {
        $config = require __DIR__.'/Resources/files/correct_config.php';
        $this->config = new Config($config);
    }

    public function testGet()
    {
        $this->assertTrue(is_array($this->config->get('client')));
        $this->assertEquals(3600, $this->config->get('client.cache.ttl'));
    }
}
