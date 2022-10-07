<?php

//design pattern command

require_once("class.command.php");
require_once("class.trader.php");
require_once("class.binanceTraderFactory.php");
require_once("class.wallet.php");

class Command{
    private $trader;
    private $wallet;
    private $instruction;

    public function __construct($instruction){
        $this->instruction = $instruction;
        $this->trader = new BinanceTraderFactory;
        $this->wallet = new Wallet;
    }

    public function execute(){
        $this->trader->createTrader($this->wallet)->trade($this->instruction);
    }

    /**
     * Get the value of trader
     */ 
    public function getTrader()
    {
        return $this->trader;
    }

    /**
     * Set the value of trader
     *
     * @return  self
     */ 
    public function setTrader($trader)
    {
        $this->trader = $trader;

        return $this;
    }

    /**
     * Get the value of wallet
     */ 
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Set the value of wallet
     *
     * @return  self
     */ 
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get the value of instruction
     */ 
    public function getInstruction()
    {
        return $this->instruction;
    }

}