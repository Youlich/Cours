<?php
/** getters et setters */

class BankAccount
{
public $accountNumber;
private $balance=0;


    public function __construct ($accountNumber)
    {
        $this->accountNumber=$accountNumber;
    }
    public function setBalance($balance)
    {
        if($balance <10000) {
            throw new Exception("Le solde est trop faible");
        }
        $this->balance = $balance;
    }
    public function getBalance()
{
    return $this->balance * 100;
}

}

/**creation de l'objet, on instancie la classe*/

$compteBancaire = new BankAccount("124567777");
$compteBancaire->setBalance(50000);
var_dump($compteBancaire->getBalance());