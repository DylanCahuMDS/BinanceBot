<?php
include('class.trader.php');
class binanceTrader implements Trader{
    private $trader;
    public $wallet;
    public $signal;
    
    public function __constructor($trader, $wallet, $signal){
        $this->trader = $trader;
        $this->wallet = $wallet;
        $this->signal = $signal;
    }

    public function buyCrypto(){
        #To do callback to Bank
        $this->wallet->storeMoney(1000);
        $this->wallet->storeCryptos(1000);
    }

    public function sellCrypto(){
        #To do callback to Bank
        $this->wallet->withdrawMoney(1000);
        $this->wallet->withdrawACrypto(1000);
    }
}