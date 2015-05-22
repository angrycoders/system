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
          $db->insertRecord("account", array(NULL, $username, $hash));
          return new Account(1, $username, $hash);
        } catch(DbException $err) {
          // for debug purposes
          echo $err;
          throw new AccountException("account could not be created", $err);
        }
    }

    /**
    * Retrieves an account from Database using their username or
    * email
    */
    public static Get(string $usernameOrEmail)
    {
        
    }

    /**
    * Retrieves an account from Database using their user ID
    */
    public static GetByID(int $accountID)
    {
        
    }

}
