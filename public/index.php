<?php

// desenv\cursoPHP\php_oo\code_07_recording_services

require_once "../vendor/autoload.php";
require_once "service.php";
require_once "config.php";

echo $container['product'];

$lista = $container['product']->list();

var_dump($lista);

