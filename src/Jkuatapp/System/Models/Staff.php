<?php

namespace Jkuatapp\System\Models;

class Staff extends Account
{
    protected $staffID;
    protected $staffNo;
    protected $name;

    public function __construct($accountID, $username, $password,
        $staffID, $staffNo, $name)
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
}

