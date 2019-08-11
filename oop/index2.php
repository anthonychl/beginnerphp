<?php

class BankAccount {
    public $balance = 10.5; //properties can be public, private or protected

    public function DisplayBalance(){    //methods can also be private, public or protected
        return 'Balance: '.$this->balance;     //$this references the object, doesnt need $ before balance property
    }

    public function Withdraw($amount){
        if($this->balance >= $amount)
        $this->balance = $this->balance - $amount;
        else
        echo 'Not enough funds <br>';

    }

}

$alex = new BankAccount;
$alex->Withdraw(5);
echo $alex->DisplayBalance();

?>