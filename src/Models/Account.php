<?php

namespace Jkuatapp\System\Models;

class Account
{
    protected $accountID;
    protected $username;
    protected $password;

    public function __construct($accountID, $username, $password)
   {
        $this->accountID = $accountID;
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function comparePassword($password)
    {
        return $this->password === $password;
    }

    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }
}

