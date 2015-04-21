<?php

namespace Jkuatapp\System\Models;

class Student extends Account
{
    protected $studentID;
    protected $regNo;
    protected $name;

    public function __construct($accountID, $username, $password,
        $studentID, $regNo, $name)
    {
        parent::__construct($accountID, $username, $password);
        $this->studentID = $studentID;
        $this->regNo = $regNo;
        $this->name = $name;
    }

    public function getRegNo()
    {
        return $this->regNo;
    }

    public function setRegNo($newRegNo)
    {
        $this->regNo = $newRegNo;
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

