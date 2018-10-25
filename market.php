#!/usr/bin/php
<?php

namespace App;

use Marketplace\Application;
use Symfony\Component\Console\Input\ArgvInput;

require_once __DIR__.'/vendor/autoload.php';

$console = new \Symfony\Component\Console\Application();
$console->add(new Application(new PimConnectorFactory()));

$console->run();

