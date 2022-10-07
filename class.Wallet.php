<?php

class Wallet{
    private $myMoney; // Amount in USDT
    private $myCryptos; // Array of crypto we bought with the buying price and the quantity

    public function __construct(){
        $this->myMoney = 1000;
        $this->myCryptos = array();
    }

    public function getMyMoney(){
        return $this->myMoney;
    }

    public function storeMoney($amount){
        $this->myMoney += $amount;
    }

    public function withdrawMoney($amount){
        $this->myMoney -= $amount;
    }

    public function storeCryptos($oneCryptoBought){
        $this->myCryptos[] = $oneCryptoBought;
    }

    public function getACrypto($symbol){
        $oneCrypto = $this->myCryptos[0];

        for ($i = 1; $i < count($this->myCryptos); $i++) {

            if($this->myCryptos[$i]["symbol"] != $symbol){
                continue;
            }

            if($this->myCryptos[$i]["buyingPrice"] < $oneCrypto["buyingPrice"]){
                $oneCrypto = $this->myCryptos[$i];
            }
        }

        return $oneCrypto;
    }
    public function withdrawACrypto($symbol){
        $index = 0;
        $oneCrypto = $this->myCryptos[0];

        for ($i = 1; $i < count($this->myCryptos); $i++) {
            $index = $i;
            if($this->myCryptos[$i]["symbol"] != $symbol){
                continue;
            }

            if($this->myCryptos[$i]["buyingPrice"] < $oneCrypto["buyingPrice"]){
                $oneCrypto = $this->myCryptos[$i];
            }
        }

        unset($this->myCryptos[$index]);

        return $oneCrypto;
    }
}

?>