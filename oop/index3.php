<?php

class BankAccount {
    public $balance = 0; //properties can be public, private or protected

    public function DisplayBalance(){    //methods can also be private, public or protected
        return 'Balance: '.$this->balance;     //$this references the object, doesnt need $ before balance property
    }

    public function Withdraw($amount){
        if($this->balance >= $amount)
        $this->balance = $this->balance - $amount;
        else
        echo 'Not enough funds <br>';

    }

    public function Deposit($amount){
        $this->balance = $this->balance + $amount;
    }

}

$alex = new BankAccount;
$alex->Deposit(1000);
$alex->Withdraw(245);
echo $alex->DisplayBalance();

$billy = new BankAccount();
$billy->Deposit(500);
$billy->Withdraw(45);
echo $billy->DisplayBalance();



?>