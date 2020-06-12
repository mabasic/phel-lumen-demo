<?php

use Phel\Runtime;

require __DIR__ . '/../vendor/autoload.php';

$rt = Runtime::initialize();
$rt->addPath('hello-world\\', [__DIR__]);

$rt->loadNs('phel\core');
$rt->loadNs('hello-world\boot');