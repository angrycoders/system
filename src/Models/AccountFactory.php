<?php

namespace Jkuatapp\System\Models;

class AccountFactory
{
    /**
    * Creates a new account
    */
    public static New(string $username, string $password)
    {
        $hash = hash("sha512", $password);
        return new Account(1, $username, $hash);
    }
}
