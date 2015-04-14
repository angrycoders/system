<?php


use Jkuatapp\System\Models as Models;


class StudentTest extends PHPUnit_Framework_TestCase
{
    private $studentID;
    private $regNo;
    private $name;
    private $student;

    public function setUp()
    {
        $this->studentID = 1;
        $this->regNo = 666;
        $this->name = "steve b";
        $this->student = new Models\Student(1, "username", "password",
            $this->studentID, $this->regNo, $this->name);
    }

    public function testGetRegNo()
    {
        $this->assertEquals($this->regNo, $this->student->getRegNo());
    }

    public function testSetRegNo()
    {
        $this->regNo = 808;
        $this->student->setRegNo($this->regNo);
        $this->assertEquals($this->regNo, $this->student->getRegNo());
    }
}

