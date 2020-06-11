<?php

spl_autoload_register();

$controller = new Controllers\HomeController();
$controller->renderHTML();