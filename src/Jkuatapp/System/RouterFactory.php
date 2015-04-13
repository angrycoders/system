<?php


namespace Jkuatapp\System;


class RouterFactory {
  protected static $router = null;

  /**
  * Returns a reference to the System router to be used by module
  */
  public static function get() {
    //  create a new system router if it has not yet been created
    if (! self::$router) {
      self::$router = new Router();
    }
    return self::$router;
  }

}

