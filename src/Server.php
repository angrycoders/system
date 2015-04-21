<?php


namespace Jkuatapp\System;


class Server
{
  private static $router = null;

  public static function start()
  {
    self::$router = RouterFactory::get();
    self::$router->start();
  }
}

