<?php

/*
 * This file is part of the DotConfig package.
 *
 * 
 * (c) Sobit Akhmedov <sobit.akhmedov@gmail.com>, Oleksandr Knyga <oleksandrknyga@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DotConfig;

class Config {
    /**
     * @var array Processed config array
     */
    private $config;

    /**
     * @param array $config Processed config array
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Gets the config parameter value based on the path.
     *
     * Example of the path "client.cache.ttl".
     *
     * @param string $parameter Path to the config parameter
     *
     * @return mixed Config parameter value
     */
    public function get($parameter)
    {
        $intermediateConfig = null;

        $path = explode('.', $parameter);
        foreach ($path as $section) {
            if (null === $intermediateConfig) {
                $intermediateConfig = $this->config[$section];
                continue;
            }

            $intermediateConfig = $intermediateConfig[$section];
        }

        return $intermediateConfig;
    }
}