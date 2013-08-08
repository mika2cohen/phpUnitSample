<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Milka
 * Date: 08/08/13
 * Time: 19:20
 * To change this template use File | Settings | File Templates.
 */

require_once ("\\..\\Account.php");

class AccountTest extends PHPUnit_Framework_TestCase {


    /**
     * @var Account  $_account
     */
    protected  $_account;

    protected function setUp()
    {
        $this->_account = new Account();
    }

    public function testBalanceIsZero()
    {
        $this->assertEquals(0,$this->_account->getAmount());
    }

    public  function testDeposit()
    {
        $this->_account->deposit(100);
        $this->assertEquals(100,$this->_account->getAmount());
    }


    /**
     *  @expectedException Exception
     */
    public  function testWithdraw()
    {
        $this->_account->withdraw(100);

    }
//test2

}