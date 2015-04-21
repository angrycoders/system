<?php

namespace Jkuatapp\System\Models;

use Exception;

class AccountException extends Exception
{
  public function __construct(string $message, Exception $exception=null, int $code=1)
  {
    parent::__construct($message, $code, $exception);
  }
}

