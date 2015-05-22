<?php

namespace Jkuatapp\System\Models;

class Staff extends Account
{
    protected $account;
    protected $staffID;
    protected $staffNo;
    protected $name;

    public function __construct($account, $staffID, $staffNo, $name)
    {
        parent::__construct($accountID, $username, $password);
        $this->staffID = $staffID;
        $this->staffNo = $staffNo;
        $this->name = $name;
    }

    public function getStaffNo()
    {
        return $this->staffNo;
    }

    public function setStaffNo($newStaffNo)
    {
        $this->staffNo = $newStaffNo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}

