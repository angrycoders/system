<?php

namespace Jkuatapp\System\Models;

use AngryCoders\Db\Db;
use AngryCoders\Db\DbException;

$db = new Db();

class AccountFactory
{
    /**
    * Creates a new account
    */
    public static New(string $username, string $password)
    {
        $hash = hash("sha512", $password);
        try {
          $db->insertRecord("student", array(NULL, $username, $hash));
          return new Account(1, $username, $hash);
        } catch(DbException $err) {
          // for debug purposes
          echo $err;
          throw new AccountException("account could not be created", $err);
        }
    }

}
