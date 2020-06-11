<?php

namespace Controllers;

class HomeController extends BaseController {

    public function renderHTML() {
        $color = $_GET['color'];
        return $this->render('home.php', [
            'color' => $color,
        ]);
    }
}