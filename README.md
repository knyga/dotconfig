DotConfig
========================
Wraps input config file with simple interface with get method, wich accepts doted request string (->get('config.ttl'))


Example
-----------

Code:

```php
<?php

use DotConfig\Config;

$config = require __DIR__.'/Resources/files/correct_config.php';
$this->config = new Config($config);
$ttl = $this->config->get('client.cache.ttl');
```

Input file:

```php
<?php

return array(
    "client" => array(
        "cache" => array(
            "ttl" => 3600,
        )
    )
);
```


Installation via [Composer](http://getcomposer.org/)
------------

 * Install Composer to your project root:
    ```bash
    curl -sS https://getcomposer.org/installer | php
    ```

 * Add a `composer.json` file to your project:
    ```json
    {
      "require" {
        "knyga/dotconfig": "1.0.*@dev"
      }
    }
    ```

 * Run the Composer installer:
    ```bash
    php composer.phar install
    ```

License
-------

DotConfig is licensed under the MIT license.

Sobit Akhmedov <sobit.akhmedov@gmail.com>

Oleksandr Knyga <oleksandrknyga@gmail.com>
