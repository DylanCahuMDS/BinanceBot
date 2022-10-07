<?php
include('class.wallet.php');




class Trader{
    public $bank;

    public function __constructor($bank){
        $this->bank = $bank;
    }

    public function buyCrypto($wallet){
        #To do callback to Bank
        $wallet->storeMoney(1000);
        $wallet->storeCryptos(1000);
    }

    public function sellCrypto($wallet){
        #To do callback to Bank
        $wallet->withdrawMoney(1000);
        $wallet->withdrawACrypto(1000);
    }

};
// To moove
$wallet = new Wallet();
$trader = new Trader('banque');
// 