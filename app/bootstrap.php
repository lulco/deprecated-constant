<?php

use Nette\Configurator;

require __DIR__ . '/../vendor/autoload.php';


$configurator = new Configurator();
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
    ->addDirectory(__DIR__)
    ->register();

return $configurator->createContainer();
