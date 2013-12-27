#Trade

## Install Giude

### Install Composer

#### Windows

    php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

#### Linux

    $ curl -sS https://getcomposer.org/installer | php
    $ mv composer.phar /usr/local/bin/composer

### Install Laravel

    php composer.phar composer.json

### Create Datebase
Import trade.sql

Change `/app/config/database.php` line 55-54

    'mysql' => array(
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'trade',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
    ),

## Contribute Giude

### Style Guide

All coding should adhere to the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) standard.

