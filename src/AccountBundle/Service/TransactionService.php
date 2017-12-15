<?php
namespace AccountBundle\Service;

use AccountBundle\Entity\Account;
use AccountBundle\Entity\Transaction;
/**
 *
 */
class TransactionService {

    // function __construct(argument) {
    //     # code...
    // }

    public function calcAccountBalance(Account $account, $amount, $enterTransaction = true) {

        $balance = $account->getAmount();
        $balance = $enterTransaction ? $balance - $amount : $balance + $amount;
        $account->setAmount($balance);
    }

}


