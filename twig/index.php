<?php

namespace Demo;

require_once './vendor/autoload.php';

$controller = new Controllers\HomeController();
echo $controller->getHTML();