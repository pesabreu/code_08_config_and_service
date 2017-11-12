<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste_oo";
$container['user'] = "root";
$container['pass'] = "103622";