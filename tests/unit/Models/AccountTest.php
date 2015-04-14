<?php


use Jkuatapp\System\Models as Models;


class AccountTest extends PHPUnit_Framework_TestCase
{
    private $account;
    private $accountID;
    private $username;
    private $password;

    public function setUp()
    {
        $this->accountID = 1;
        $this->username = "gocho";
        $this->password = "mugo";
        $this->account = new Models\Account($this->accountID,
            $this->username, $this->password);
    }

    public function testGetUsername()
    {
        $this->assertEquals($this->username, $this->account->getUsername());
    }

    public function testSetUsername()
    {
        $this->username = "jkuat";
        $this->account->setUsername($this->username);
        $this->assertEquals($this->username, $this->account->getUsername());
    }

    public function testComparePassword()
    {
        $this->assertTrue($this->account->comparePassword($this->password));
        $this->assertFalse($this->account->comparePassword("incorrect"));
    }

    public function testSetPassword()
    {
        $this->password = "octo";
        $this->account->setPassword($this->password);
        $this->assertTrue($this->account->comparePassword($this->password));
    }
}
