<?php

namespace App\Controllers;

use SON\Controller\Action;

class IndexController extends Action
{
    public function index()
    {
        @$this->view->cars = ["Mustang", "Ferrari"];
        $this->render("index");
    }

    public function contact()
    {
        @$this->view->cars = ["Mustang", "Ferrari"];
        $this->render("contact",false);
    }
}