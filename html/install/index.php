<?php

require __DIR__.'/bootstrap.php';

$controller = new \Momoxo\Installer\Controller\DefaultController($installerConfig, $container);
$controller->run();
$controller->respond();
