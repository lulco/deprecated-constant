<?php

namespace App\Router;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\SimpleRouter;

class RouterFactory
{
    public static function createRouter(): RouteList
    {
        $router = new RouteList();
        $router[] = new Route('/simplerouter', 'simplerouter', SimpleRouter::SECURED);
        $router[] = new Route('/irouter', 'irouter', IRouter::SECURED);
        return $router;
    }
}
