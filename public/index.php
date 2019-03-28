<?php declare(strict_types=1);

$loader = require_once __DIR__ . '/../vendor/autoload.php';
$customModules = require_once __DIR__ . '/../config/modules.php';

use Phlexus\Application;

echo (new Application('default', [], $loader->getPrefixesPsr4(), $customModules))->run();
