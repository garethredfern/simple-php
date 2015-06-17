<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');

echo "Hello World!";