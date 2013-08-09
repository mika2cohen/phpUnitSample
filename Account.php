<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Milka
 * Date: 08/08/13
 * Time: 19:11
 * To change this template use File | Settings | File Templates.
 */

class Account {

    protected $amount;

    function __construct()
    {
        $this->amount=0;
    }

    public function deposit($amount)
    {
        $this->amount+=$amount;
    }

    public function withdraw($amount)
    {
        if($this->amount-$amount<0)
            throw new Exception("Ammount can't be positive");

        $this->amount-=$amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

}