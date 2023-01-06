<?php

use Front\App;

define('URL', 'http://manobankas.lt/');

require __DIR__ . '/../vendor/autoload.php';

$response = App::start();

echo $response;