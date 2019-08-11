<?php


class BankAccount {
    protected $balance = 0; //properties can be public, private or protected
    protected $type = 'common';

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

    public function GetType(){
        return $this->type;
    }

}

class SavingsAccount extends BankAccount {

    public function __construct($type = 'savings'){
        $this->type = $type;
    }

    public function SetType($input){
        $this->type = $input;
    }
}




$alex = new BankAccount;
$alex->Deposit(1000);
$alex->Withdraw(245);
echo $alex->GetType().'<br>';
echo 'bank account '.$alex->DisplayBalance().'<br>';

echo '<br><br>';

$alex_savings = new SavingsAccount();
echo $alex_savings->GetType().'<br>';
$alex_savings->Deposit(3000);
echo 'alex savings account '.$alex_savings->DisplayBalance().'<br>';
$alex_savings->Withdraw(50);
echo 'alex savings account '.$alex_savings->DisplayBalance().'<br>';
$alex_savings->SetType('super savings');
echo $alex_savings->GetType().'<br>';

echo '<br><br>';

$anthony_savings = new SavingsAccount('richy rich saver');
echo $anthony_savings->GetType().'<br>';
$anthony_savings->Deposit(3000000);
echo 'anthony savings account '.$anthony_savings->DisplayBalance().'<br>';

?>