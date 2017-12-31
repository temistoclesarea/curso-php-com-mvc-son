<?php

namespace App;

use SON\Init\Bootstrap;

class Route extends Bootstrap
{

    protected function initRoutes()
    {
        $routes['home'] = [
            'route'=>'/', 
            'controller'=> "indexController",
            'action'=>'index'];

        $routes['contact'] = [
            'route'=>'/contact', 
            'controller'=> "indexController",
            'action'=>'contact'];
        $this->setRoutes($routes);
    }

}