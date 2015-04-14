<?php


use Jkuatapp\System\Models as Models;


class StaffTest extends PHPUnit_Framework_TestCase
{
    private $staffID;
    private $staffNo;
    private $name;
    private $staff;

    public function setUp()
    {
        $this->staffID = 1;
        $this->staffNo = 200;
        $this->name = "felix o";
        $this->staff = new Models\Staff(1, "username", "password",
            $this->staffID, $this->staffNo, $this->name);
    }

    public function testGetStaffNo()
    {
        $this->assertEquals($this->staffNo, $this->staff->getStaffNo());
    }

    public function testSetStaffNo()
    {
        $this->staffNo = 909;
        $this->staff->setStaffNo($this->staffNo);
        $this->assertEquals($this->staffNo, $this->staff->getStaffNo());
    }

}
