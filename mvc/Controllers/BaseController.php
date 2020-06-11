<?php

namespace Controllers;

abstract class BaseController {

    protected function render($template, $template_args) {
        require(__DIR__.'/../templates/'.$template);
    }

    abstract public function renderHTML();
}