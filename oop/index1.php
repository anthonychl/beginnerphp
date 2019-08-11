<?php

class BankAccount {
    public $balance = 0; //properties can be public, private or protected

    public function DisplayBalance(){    //methods can also be private, public or protected
        return 'Balance: '.$this->balance.'<br>';     //$this references the object, doesnt need $ before balance property
    }

}

$alex = new BankAccount;
echo $alex->DisplayBalance();

$alex->balance = 200;
echo $alex->DisplayBalance();

?>