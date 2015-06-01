<?php

namespace Jkuatapp\System\Models;

use AngryCoders\Db\Db;
use AngryCoders\Db\DbException;

$db = new Db();

class StaffFactory
{
    /**
    * Creates a new account
    */
    public static New(string $username, string $password, int staffID, int staffNo, string name)
    {
        try {
            $account = AccountFactory::New($username, $password);
            return new Staff($account, );
        } catch(Exception $err) {
          // for debug purposes
          echo $err;
          throw new AccountException("staff account could not be created", $err);
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
    * Retrieves an account from Database using their staff ID
    */
    public static GetByID(int $staffID)
    {
        
    }

}
