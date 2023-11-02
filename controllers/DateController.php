<?php

namespace Controllers;

use MVC\Router;

class DateController {
    public static function date(Router $router) {
        $router->render("date/index", [

        ]);
    }
}