<?php

namespace Demo\Controllers;

class HomeController extends BaseController {

    public function getHTML() {
        $color = $_GET['color'];

        return $this->render('home.html.twig', [
            'color' => $color
        ]);
    }
}