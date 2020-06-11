<?php

namespace Demo\Controllers;

abstract class BaseController {
    
    protected function render($template, $args) {
        $loader = new \Twig\Loader\FilesystemLoader(
            __DIR__.'/../Views/'
        );
        $twig = new \Twig\Environment($loader);

        return $twig->render($template, $args);
    }

    abstract public function getHTML();
}