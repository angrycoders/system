<?php


namespace Jkuatapp\System;


class RouterFactory {
  protected $router = null;

  /**
  * Returns a reference to the System router to be used by module
  */
  public function get() {
    //  create a new system router if it has not yet been created
    if (! $this->router) {
      $this->router = new Router();
    }
    return $this->router;
  }

}

