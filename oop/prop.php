<?php

class BankAccount {
    private $balance = 3500; //properties can be public, private or protected
    /*
      var $_balance = 3500; //also private, use: var $_variable

      public $balance = 3500;
      var $balanceOfAccount = 3500 // also public, use: var $variableInCamelCaps

      protected $balance = 3500;
      var $_Tbalance = 3500 // also protected, use: var $_Tvariable
    */


    public function DisplayBalance(){    //methods can also be private, public or protected
        return $this->balance;     //$this references the object, doesnt need $ before balance property
    }

    public function Withdraw($amount){
        if($this->balance >= $amount)
        $this->balance = $this->balance - $amount;
        else
        echo 'Not enough funds <br>';

    }

}

$alex = new BankAccount();
echo $alex->DisplayBalance();

?>